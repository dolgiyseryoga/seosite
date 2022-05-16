<!-- Модальное окошко-->
<div class="modal fade" id="editModal<?= $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class=" table shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редактировать обращение № <?= $value['id'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="?id=<?= $value['id'] ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="edit_name" value="<?= $value['name'] ?>" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="edit_last_name" value="<?= $value['last_name'] ?>" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="edit_pos" value="<?= $value['pos'] ?>" placeholder="Описание вопроса">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Модальное окошко удаления -->
<div class="modal fade" id="deleteModal<?= $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class=" table shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вы точно хотите удалить тикет № <?= $value['id'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <form action="?id=<?= $value['id'] ?>" method="post">
                    <button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</div>