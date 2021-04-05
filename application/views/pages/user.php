<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuários</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url('')?>user/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i>Novo Usuário</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
                    <th>Nome</th>
					<th>Ações</th>                 
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user): ?>
					<tr>
						<td><?= $user['id'] ?></td>
						<td><?= $user['name'] ?></td>						
						<td>
							<a href="<?= base_url('')?>user/edit/<?= $user['id']?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>								
							<a href="javascript:goDelete(<?= $user['id']?>)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
						</td>					
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>

<script>
	function goDelete(id){
		//alert(id);
		var myUrl = 'user/delete/'+id
		if(confirm("Deseja realmente apagar este registro?")){
			window.location.href = myUrl;
		}else{
			alert("Registro não alterado");
			return false;
		}		
	}
</script>