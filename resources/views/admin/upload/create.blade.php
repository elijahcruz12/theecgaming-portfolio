@extends('layouts.admin')

@section('title', 'New Upload')

@section('content')
    <div class="md:flex md:items-center md:justify-between border-b pb-4">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">New Upload</h2>
            <p class="mt-1 text-sm text-gray-500">Create a new upload</p>
        </div>
    </div>

    <div class="mt-4 max-w-3xl mx-auto">
        @csrf
        <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow border-2">
            <div class="px-4 py-5 sm:p-6">
                <div class="form-control">
                    <button type="button" id="file" class="relative block w-full rounded-lg border-2 border-dashed border-gray-300 p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <x-heroicon-o-arrow-up-on-square class="mx-auto h-12 w-12 text-gray-400" />
                        <span class="mt-2 block text-sm font-semibold text-gray-900" id="fileText">Drag and drop a file</span>
                    </button>
                </div>
                <div class="form-control">
                    <div class="hidden" id="progress-div">
                        <div class="flex gap-2 my-2">
                            <span id="progress-text">
                                0%
                            </span>
                            <progress id="progress" class="progress progress-primary flex-1" max="100" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-4 sm:px-6">
                <div class="flex justify-end">
                    <a href="{{ route('admin.uploads.index') }}" class="btn btn-outline btn-secondary mr-2">Cancel</a>
                    <button onclick="uploadFile()" id="submitBtn" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </div>

    <script>
        // We need to use ResumableJS to upload the file.
        let r = new Resumable({
            target: '{{ route('admin.uploads.store') }}',
            query: {
                token: '{{ $token }}',
                file_type: 'video',
                _token : '{{ csrf_token() }}'
            },
            chunkSize: 12 * 1024 * 1024,
            forceChunkSize: true,
            simultaneousUploads: 1,
            testChunks: false,
            throttleProgressCallbacks: 1,
        })

        let hasFile = false;

        r.assignBrowse(document.getElementById('file'))
        r.assignDrop(document.getElementById('file'))

        r.on('fileAdded', function (file){
            let fileText = document.getElementById('fileText')

            // Get the file name and size
            let fileName = file.fileName
            let fileSize = file.size

            hasFile = true;

            // Show the file name and size
            fileText.innerText = fileName + ' (' + fileSize + ' bytes)'

            updateProgressBar(0);
        })
        r.on('fileSuccess', function (){
            // Redirect to the uploads page
            window.location.href = '{{ route('admin.uploads.index') }}'
        })
        r.on('fileError', function (file, message){
            // Show an alert with the error message
            alert(message)
        })

        r.on('progress', function(){
            updateProgressBar(r.progress());
        })

        function uploadFile() {

            if(!hasFile){
                return;
            }

            // Show the progress bar
            showProgressBar()

            // Start the upload
            r.upload()
        }

        function showProgressBar(){
            let progressDiv = document.getElementById('progress-div')
            let submitBtn = document.getElementById('submitBtn')
            progressDiv.classList.remove('hidden')
            // Disable the submit button
            submitBtn.disabled = true
        }

        function updateProgressBar(percent){
            let progress = document.getElementById('progress')
            let progressText = document.getElementById('progress-text')
            progressText.innerText = Math.floor(percent * 100) + '%'
            progress.value = Math.floor(percent * 100)
        }
    </script>
@endsection
