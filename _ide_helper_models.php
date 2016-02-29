<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Book
 *
 * @property-read \App\Models\Author $author
 */
	class Book {}
}

namespace App\Models{
/**
 * App\Models\Author
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $books
 */
	class Author {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
	class User {}
}

