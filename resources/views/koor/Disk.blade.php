<?php 

    $dokumen= request()->file('uploadFile');
    $dokumen->store('toPath', ['disk' => 'public']);

    ?>