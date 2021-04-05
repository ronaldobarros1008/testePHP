<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"></h1>
        </div>

        <div class="col-md-12">
		<?php if(isset($task)){ ?>		
            <form action="<?= base_url('')?>dashboard/update/<?= $task['id']?>" method="post">
		<?php }else{ ?>
			<form action="<?= base_url('')?>dashboard/store" method="post">
		<?php } ?>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Tarefas</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Descrição da Tarefa" required value="<?= isset($task) ? $task["description"] : "" ?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Usuários</label>
                            <select name="user_id" id="user_id" class="form-control" required >
                                <option value="<?= isset($task) ? $task["user_id"] : "" ?>">---Selecione---</option>
                                <?php foreach($users as $user):?>
                                    <option value="<?=$user->id?>"><?=$user->name?></option>
                                <?php endforeach;?> 
                            </select>
                   </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Data Final</label>
                        <input type="date" class="form-control" name="final_date" id="final_date" placeholder="Data final" required value="<?= isset($task) ? $task["final_date"] : "" ?>">
                    </div>
                </div>                 

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Categoria</label>
                            <select name="category_id" id="category_id" class="form-control" required value="<?= isset($task) ? $task["category_id"] : "" ?>">
                                <option value="<?= isset($task) ? $task["user_id"] : "" ?>">---Selecione---</option>
                                <?php foreach($categories as $category):?>
                                    <option value="<?=$category->id?>"><?=$category->description?></option>
                                <?php endforeach;?> 
                            </select>
                   </div>
                </div>               

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i>Save</button>
                    <a href="<?= base_url('')?>dashboard" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
                </div>

            </form>
        </div>

    </main>
    </div>
    </div>