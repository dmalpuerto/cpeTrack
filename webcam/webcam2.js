 function preview_snapshot() {
        Webcam.set({
          width: 250,
          height: 200,
          image_format: 'jpeg',
          jpeg_quality: 90
        });
        Webcam.attach( '#picture' );
      // freeze camera so user can preview pic
      Webcam.freeze();
    }
    
    function save_photo() {
      // actually snap photo (from preview freeze) and display it
      Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('picture').innerHTML = 
          '<img src="'+data_uri+'"/>';
         document.getElementById('profileImage').innerHTML = 
          '<input type="hidden" name="profileImage" id="profileImage" value="'+data_uri+'"/>';
      } );
    }


   function preview_snapshot2() {
        Webcam.set({
          width: 250,
          height: 200,
          image_format: 'jpeg',
          jpeg_quality: 90
        });
        Webcam.attach( '#picture2' );
      // freeze camera so user can preview pic
      Webcam.freeze();
    }
    
    function save_photo2() {
      // actually snap photo (from preview freeze) and display it
      Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('picture2').innerHTML = 
          '<img src="'+data_uri+'"/>';
         document.getElementById('profileImage2').innerHTML = 
          '<input type="hidden" name="profileImage" id="profileImage2" value="'+data_uri+'"/>';
      } );
    }

