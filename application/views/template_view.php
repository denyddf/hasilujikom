<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Kelola Kontak</title>
        
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>">
</head>
<body>
    <!-- Main Content -->
        <?php $this->load->view($content);?> 
    <!-- Main Content -->

    <!-- Modal Pop Up -->
    <div class="modal modal-list-kontak" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kontak Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body-kontak">
                    <p>Modal body text goes here.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-list-detail" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Kontak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body-detail">
                    <img src="https://randomuser.me/api/portraits/women/75.jpg" class="w-100">
                    <h3>Sheila Perez</h3>
                    <p></p>
                    <div class="card">
                        <div class="card-body">
                            <p>
                                Lahir: Roberta Mckinney
                            </p>
                            <p>
                                Jenis Kelamin: Men
                            </p>
                        </div>
                    </div>
                    <p></p>
                    <div class="card">
                        <div class="card-body">
                            <p>
                                Surel: roberta.mckinney@example.com
                            </p>
                            <p>
                                Telepon Seluler: (179)-236-4605
                            </p>
                        </div>
                    </div>
                    <p></p>
                    <div class="card">
                        <div class="card-body">
                            <p>
                                Tempat Tinggal: Costa Mesa
                            </p>
                            <p>
                                Koordinat: 28.3387, 29.0577
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Pop Up -->

    <script src="<?php echo base_url('assets/custom/js/jquery-1.11.0.min.js');?>"></script>
    <!-- <script src="<?php echo base_url('assets/custom/js/popper.min.js');?>"></script> -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/custom/js/custom.js?'.date('ymdhis'));?>"></script>

    <script type="text/javascript">
        function addDataPage(img,first,last,email){
            $(".list-group-dasboard").append("<a href=\"javascript:void(0);\" onclick=\"viewData('"+email+"')\"><li class=\"list-group-item\"><div class=\"row\"><div class=\"col-2\"><img src=\""+img+"\"></div><div class=\"col-10\">"+first+" "+last+"</div></div></li></a>");
            $(".modal-list-kontak").modal('hide');
        }

        function viewData(email){
            var base_url = '<?php echo base_url();?>';

            $.ajax({
                url: base_url+"kontak/getDetailKontak",
                type: 'POST', 
                data: 'email=email',
                success: function(data){
                    // $("#modal-body-kontak").html(data);
                    $(".modal-list-detail").modal('show');
                    console.log(data);
                }
            });
        }

        $(document).ready(function(){
            var base_url = '<?php echo base_url();?>';

            $('#btnTambah').click(function(){
                $.ajax({
                    url: base_url+"kontak/getDataKontak",
                    type: 'POST', 
                    data: 'type=fetch',
                    success: function(data){
                        $("#modal-body-kontak").html(data);
                        $(".modal-list-kontak").modal('show');
                    }
                });
            });
        })
    </script>
</body>
</html>