 <script>
     function showFile(input) {
         let file = input.files[0];

         if (file.type && !file.type.startsWith('image/')) {
             console.log('File is not an image.', file.type, file);
             return;
         }
         const reader = new FileReader();
         reader.addEventListener('load', () => {
             document.getElementById('img-review').src = reader.result;
         });
         //readAsDataURL method encodes the file as a base64 encoded string, which can be used directly in image elements.
         reader.readAsDataURL(file);
     }
 </script>
