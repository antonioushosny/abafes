<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StorageHandle;

class Contact extends Model
{
    use \Dimsav\Translatable\Translatable, StorageHandle;
    protected $connection = 'mysql';
    /**
     * Table name.
     * 
     * @var string
     */
    protected $table = 'contacts';

    /**
     * Primary key.
     * 
     * @var string
     */
    protected $primaryKey = 'contacts_id';

    /**
     * Translated attributes.
     * 
     * @var array
     */
    public $translatedAttributes =  [
        'contacts_address','contacts_text'
    ];

    /**
     * Timestamps.
     * 
     * @var string
     */
    const CREATED_AT = 'contacts_created_at';
    const UPDATED_AT = 'contacts_updated_at';

    /**
     * Fillable fields.
     * 
     * @var array
     */
    protected $fillable = [
        'contacts_id', 'contacts_mobiles', 'contacts_facebook', 'contacts_twitter', 'contacts_instagram', 'contacts_snapchat','contacts_whatsapp'
    ];

}
