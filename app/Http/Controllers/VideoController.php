<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use FFMpeg;
use FFMpeg\Format\Video\X264;

class VideoController extends Controller
{
    public function showForm()
    {
        return view('video.form');
    }

    public function processVideo(Request $request)
    {
        $request->validate([
            'input_video' => 'required|mimes:mp4|max:102400',
        ]);

        $inputFile = $request->file('input_video')->storeAs('videos', 'input.mp4', 'public');
        $outputFile = 'videos/output.mp4';

        $ffmpeg = FFMpeg\FFMpeg::create();

        $video = $ffmpeg->open(Storage::disk('public')->path($inputFile));
        $format = new X264();

        $video->save($format, Storage::disk('public')->path($outputFile));

        return response()->download(Storage::disk('public')->path($outputFile))->deleteFileAfterSend(true);
    }
}
