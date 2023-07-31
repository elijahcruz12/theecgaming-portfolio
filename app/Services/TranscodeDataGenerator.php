<?php

namespace App\Services;

class TranscodeDataGenerator
{
    /**
     * @var string|null
     */
    protected ?string $data = null;

    /**
     * @var string|null
     */
    protected ?string $source = null;

    /**
     * @param string|null $source
     */
    public function __construct(?string $source)
    {
        $this->source = $source;
    }

    /**
     * @return $this
     */
    public function make(): static
    {
        $data = [
            "query" => [
                "format" => [
                    [
                        "output" => "mp4",
                        "video_codec" => "libx264",
                        "height" => "1080",
                        "optimize_bitrate" => 1,
                    ],
                    [
                        "output" => "mp4",
                        "video_codec" => "libx264",
                        "height" => "720",
                        "optimize_bitrate" => 1,
                    ],
                    [
                        "output" => "mp4",
                        "video_codec" => "libx264",
                        "height" => "480",
                        "optimize_bitrate" => 1,
                    ],
                    [
                        "output" => "mp4",
                        "video_codec" => "libx264",
                        "height" => "360",
                        "optimize_bitrate" => 1,                     ]
                    ]
                ],
                "encoder_version" => "2",
                "callback_url" => config('theecgaming.qencode.callback'),
                "source" => $this->source
            ];

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     * @return $this
     */
    public function setSource(?string $source): TranscodeDataGenerator
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
}
