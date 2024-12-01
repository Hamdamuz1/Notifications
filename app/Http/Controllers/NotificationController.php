<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;  // Controller'ni to'g'ri chaqirish

class NotificationController extends Controller
{

    public $timestamps = true;  
    // index: notification ro'yxatini ko'rsatish
    public function index()
    {
        $notifications = Notification::all(); // Barcha notificationsni olish
        return view('notifications.index', compact('notifications'));
    }

    // create: yangi notification yaratish formasi
    public function create()
    {
        return view('notifications.create');
    }

    // store: yangi notificationni saqlash
 // store: yangi notificationni saqlash
public function store(Request $request)
{
    // Validatsiya qilish
    $request->validate([
        'title' => 'required|string|max:255',
        'message' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $data = $request->only(['title', 'message']);

    // Rasmni saqlash
    if ($request->hasFile('image')) {
        $data['image_url'] = $request->file('image')->store('notifications', 'public');
    }

    Notification::create($data);

    return redirect()->route('notifications.index')->with('success', 'Xabarnoma muvaffaqiyatli qo\'shildi!');
    // Yangi notification yaratish va saqlash
    
}

    

    // edit: notificationni tahrirlash formasi
    public function edit($id)
    {
        // Tahrirlash uchun notificationni olish
        $notification = Notification::findOrFail($id);
        return view('notifications.edit', compact('notification'));
    }

    // update: notificationni yangilash
    public function update(Request $request, $id)
    {
        // Notificationni topish
        $notification = Notification::findOrFail($id);

        // Validatsiya qilish
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Notificationni yangilash
        $notification->update([
            'title' => $request->title,
            'message' => $request->message,
        ]);

        // Xabarnomalar ro'yxatiga qaytish
        return redirect()->route('notifications.index');
    }

    // show: notificationni ko'rsatish
    public function show($id)
    {
        // Notificationni olish
        $notification = Notification::findOrFail($id);
        return view('notifications.show', compact('notification'));
    }

    // destroy: notificationni o'chirish
    public function destroy($id)
    {
        // Notificationni topish
        $notification = Notification::findOrFail($id);

        // Notificationni o'chirish
        $notification->delete();

        // Xabarnomalar ro'yxatiga qaytish
        return redirect()->route('notifications.index');
    }
}

