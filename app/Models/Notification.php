<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    // Modelga kerakli propertylarni qo'shing
    protected $fillable = ['title', 'message', 'image_url']; // Yaratish va yangilashda foydalaniladigan maydonlar
}
