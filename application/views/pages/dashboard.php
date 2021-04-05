            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="<?= base_url('')?>dashboard/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i>
                                Nova Tarefa
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2 class="h2">Tarefas</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Usuário</th>
                                <th>Data Final</th>
                                <th>Categoria</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <?php foreach($tasks as $task): ?>
                        <tr>
                            <td><?= $task->id ?></td>
                            <td><?= $task->description ?></td>
                            <td><?= $task->user ?></td>
                            <td><?= $task->final_date ?></td>
                            <td><?= $task->category ?></td>
                            <td>
                            <a href="<?= base_url('')?>dashboard/edit/<?= $task->id?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <a href="javascript:goDelete(<?= $task->id?>)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                </div>                
            </main>

<script>
	function goDelete(id){
		//alert(id);
		var myUrl = 'dashboard/delete/'+id
        //alert(myUrl);
		if(confirm("Deseja realmente apagar este registro?")){
			window.location.href = myUrl;
		}else{
			alert("Registro não alterado");
			return false;
		}
	}
</script>