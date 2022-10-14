
class Player{
    constructor(container, song){
        this.name = null;
        this.formats = ['mp3', 'mp4'];
        this.album = null;
        this.playlist = [];
        this.timestamp = 0.0;
        this.volume = 50;
        this.repeat = flase;
        this.is_playing = flase;
        this.repeat = false;
        this.shuffle = false;
    }
    start(){
        this.timestamp = 0.0;
        this.is_playing = true;
    }
    pause(){
        this.is_playing = flase;
        
    }
    stop(){
        this.is_playing = false;
        this.setTimestamp(0.0);
    }
    setTimestamp(timestamp){
        this.timestamp = timestamp;
        if(this.timestamp >= 0 && this.timestamp <= this.song_lenght){
            this.timestamp = timestamp;
            this.showTimestampOnTimbar();
        }
    }
    toggleShuffle(){
        this.shuffle = !this.repeat;
    }
    toggleRepeat(){
        this.repeat = !this.repeat;
    }
}
const newPlayer = Player;