
        var speak = false;
        document.addEventListener('keydown', function(event) {
        if(event.keyCode == 67 && event.ctrlKey) { //CTRL+C
            if(speak){
                recognition.stop();
                speak = false;
            }
            else{
                recognition.start();
                speak = true;
            }
            
        }
        else if(event.keyCode == 113) {
            location.replace("faq.php");
        }
        else if(event.keyCode == 32  &&event.ctrlKey){
            alert("SHORTCUTS:\nctrl + c => start speaking/ stop speaking \nctrl + q => search \nf2 => FAQ \nctrl + space => available shortcuts")
        }
    }); 
