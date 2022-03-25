<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int ID
 * @property string ARTICLE
 * @property string NAME
 * @property string STATUS
 * @property array DATA
 */

class Product extends Model
{
    use HasFactory;

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'products';


    /**
     * Timestamps
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * Casts
     *
     * @var string[]
     */
    protected $casts = [
        'DATA' => 'array',
    ];


    /**
     * Add product in table
     *
     * @param $article string
     * @param $name string
     * @param $status string
     * @param $data array
     */
    public function addProduct($article, $name, $status, $data)
    {
        $this->ARTICLE = $article;
        $this->NAME = $name;
        $this->STATUS = $status;
        $this->DATA = $data;
        $this->save();
    }

}