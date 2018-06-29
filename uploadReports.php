<?php
/**
 * Created by PhpStorm.
 * User: CollyneJumah
 * Date: 12-Jun-18
 * Time: 12:33
 */

?>
<!DOCTYPE html>
    <html>
<head>
    <title>File uploads</title>

    <style>
        *{
            margin:10px;padding:0;
        }
        .content{
            text-align: center;
        }
        hr{
            border: 2px solid #0098ee;
        }
        .fileDragOver{
            color: #000;
            border: #000;
        }
        .fileDragArea{
            border: 2px dotted #ccc;height: 400px;line-height: 400px;font-size: 24px;text-align: center;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <h2 >Drag and drop files using PHP Ajax-JQuery</h2>
            <div class="row">
                <div class="col-md-9">
                    <div class="tab-content"  style="width: auto;height: 500px">
                         <div class="active tab-pane" id="activity">
                             <hr>
                           <h4 style="align-content: center;margin:0 auto;padding: 0 auto">Upload files here</h4>
                        </div>
                        <!-- /.tab-pane -->
                            <div class="form-control text-center">
                                <input type="file" class="-align-center" name="file">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 0%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" ></div>
                            </div>
                                <h4 class="text-center">Or</h4>
                        <div class="text-center fileDragArea">
                            Drag  your file here
                        </div>
                        <div id="uploadFile"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.fileDragArea').on('dragover',function () {
            $(this).addClass('fileDragOver');
            return false;
        });
        $('.fileDragArea').on('dragleave',function () {
            $(this).removeClass('fileDragOver');
        });
        $('.fileDragArea').on('drop',function (e) {
            e.preventDefault();
            $(this).removeClass('fileDragOver');
            var formData= new FormData();
            //get lists of files droped
            var fileList=e.originalEvent.dataTransfer.files;
           // console.log(fileList);
            for(var f=0;f<fileList.length;f++){
                //append data tp form file
                formData.append('file[]',fileList[f]);
            }
            //console.log(formData);
            $.ajax({
                url:"uploadFile.php",
                method:"POST",
                data:formData,
                contentType:false,
                cache:false,
                processData:false,
                success:function (data) {
                    $('#uploadFile').html(data);
                    
                }

            });

        })
    });
   
</script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
</body>
</html>

