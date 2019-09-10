<?php

trait Video {
  public function tag() {
    echo "<p>video</p>";
  }
}

trait Audio {
  public function tag() {
    echo "<p>audio</p>";
  }
}

class Media {
  use Audio, Video {
    Video::tag insteadof Audio;
    Audio::tag as tagAudio;
  }
}

$media = new Media();
echo $media->tag();
echo $media->tagAudio();
