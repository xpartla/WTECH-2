<script type="text/javascript">
    let cur_picture = 0;
    filePaths = {!! $filePathsJson !!};
    firstFilePath = ((filePaths["{{ $product['id'] }}"][0]).split("public"))[1];
    the_picture = document.getElementById("the_picture");
    the_picture.src = firstFilePath;

    function changepicture(direction){
        let allpics = String(filePaths["{{ $product['id'] }}"]).split(",");
        if (allpics.length-1 > cur_picture && direction === true){
            cur_picture += 1;
            the_picture.src = ((allpics[cur_picture]).split("public"))[1];
        }
        else if (cur_picture !== 0 && direction === false){
            cur_picture -= 1;
            the_picture.src = ((allpics[cur_picture]).split("public"))[1];
        }
        else if (cur_picture === 0 && direction === false){
            cur_picture = allpics.length-1;
            the_picture.src = ((allpics[cur_picture]).split("public"))[1];
        }
        else if (cur_picture === allpics.length-1 && direction === true){
            cur_picture = 0;
            the_picture.src = ((allpics[cur_picture]).split("public"))[1];
        }

    }

    document.getElementById('leftarrow').addEventListener('click', function() {
        changepicture(false);
    });

    document.getElementById('rightarrow').addEventListener('click', function() {
        changepicture(true);
    });
</script>
