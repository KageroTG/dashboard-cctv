<?php

namespace App\Services;

use FFMpeg\FFMpeg;
use FFMpeg\Format\Video\X264;

class VideoService
{
    protected $ffmpeg;

    public function __construct()
    {
        // Create an FFmpeg instance
        $this->ffmpeg = FFMpeg::create();
    }

    // Convert stream to HLS format for live streaming
    public function convertToHLS($inputPath, $outputPath)
    {
        $video = $this->ffmpeg->open($inputPath);

        // Save the video in HLS (HTTP Live Streaming) format
        $video->save(new X264(), $outputPath);
    }

    // Capture a screenshot from the stream
    public function captureScreenshot($inputPath, $outputPath, $time = 10)
    {
        $video = $this->ffmpeg->open($inputPath);

        // Capture a frame at 10 seconds (can adjust $time)
        $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds($time));
        $frame->save($outputPath);
    }
}
