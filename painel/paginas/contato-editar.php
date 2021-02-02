<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar Contato</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Editar-Contato</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nome-Serviço</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="?pg=contato-editar" method="POST">
                            <?php foreach ($dados as $dado) {
                                ?>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nome">Nome </label>
                                        <input type="text" name="nome" value=" <?php echo $dado['nome']; ?>" class="form-control" id="nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail </label>
                                        <input type="text" name="email" value=" <?php echo $dado['email']; ?>" class="form-control" id="tipo">
                                    </div>
                                    <div class="form-group">
                                        <label for="mensagem">Mensagem</label>
                                         <input type="text" name="mensagem" value=" <?php echo $dado['mensagem']; ?>" class="form-control" id="nome">
                                    </div>
                                    <input type="hidden" value="<?php echo $dado['id']; ?>" name="id" >

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <a href="?pg=servicos" class=" btn btn-warning"><Span class="">Voltar</Span></a>
                                    <button type="submit" class=" btn btn-info"><span class="fa fa-save"></Span>Atualizar</button>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->