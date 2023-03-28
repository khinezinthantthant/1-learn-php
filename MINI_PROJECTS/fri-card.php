<?php include_once "head.php"; ?>

<div class="p-3">
    <h1>Create Friend Card</h1>
    <form action="./fri-logic.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label" for="">Friend Name</label>
            <input class="form-control" type="text" name="fri_name" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Friend Phone</label>
            <input class="form-control" type="number" name="fri_phone" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Friend Address</label>
            <textarea class="form-control" rows="5" name="fri_address" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Friend Photo</label>
            <input class="form-control" type="file" name="fri_photo" accept="image/jpeg,image/png" >
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="isreal" name="isreal" value="yes">
            <label class="form-check-label" for="isreal">Real Friend</label>
        </div>

        <button class="btn btn-primary w-100">Create Friend List</button>
    </form>


    <div class=" my-5">
        <?php
            $dataFileName = "friend-data.json";
            $friends = json_decode(file_get_contents($dataFileName),true);
         ?>
        <?php foreach($friends as $key=>$friend): ?>
        <div class="card mb-3">
            <div class="card-body text-center">
                <img src="<?= $friend["photo"] ?>" class=" rounded-circle" width="100" height="100" alt="">
                <h4><?= $friend["fri_name"] ?></h4>
                <p><?= $friend["fri_phone"] ?></p>
                <a href="./fri_detail.php?index=<?= $key ?>" class=" btn btn-primary w-100 d-block">Detail</a>
                <a href="./fri-del.php?index=<?= $key ?>" class=" btn btn-danger w-100 d-block">Delete</a>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include_once "footer.php"; ?>
