<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Portfolio
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \App\Enums\Portfolio\PortfolioItemTypeEnum|null $type
 * @property mixed|null $images
 * @property mixed|null $videos
 * @property mixed|null $links
 * @property mixed|null $tags
 * @property mixed|null $meta
 * @property int $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereLinks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereVideos($value)
 */
	class Portfolio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Video
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property array|null $thumbnails
 * @property array|null $versions
 * @property array|null $tags
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereThumbnails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereVersions($value)
 */
	class Video extends \Eloquent {}
}

