
<!-- //Javascript code for the Drop Zone Upoad file  -->

<script>

    let drop = new Dropzone('#file', {
        url: '{{route('upload.store',$file)}}',
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
        }
    });

    @foreach($file->uploads as $upload)
    drop.emit('addedfile',{
                id: file.id,
                name:file.name,
                size:file.size
            })
    @endforeach


    drop.on('success', function(file, response) {
        file.id = response.id;
        console.log(response);
    });




    drop.on('removedfile', function(file) {
        console.log("route :::"+route('upload.destroy',{ upload: file.id}));
        axios.delete(route('upload.destroy', {upload:file.id})).catch(function(error) {
            drop.emit('addedfile',{
                id: file.id,
                name:file.name,
                size:file.size
            })
        }  );

    }
   )
   </script>
