<?php include ('overall_header.php'); ?>

<div class="panel">
<?php foreach($_SESSION['Results'] as $r): ?>

    <h3><?=$r['title'];?></h3>
    <div class="content">
        <p><?=$r['text'];?></p>
        <span class="author">
            <br />Posted by <?=$r['author']. " at ". date($r['date']);?><br />
            <i>Likes: <?=$r['likes'];?></i><br>

            <!-- Like System -->
            <span id='thumbs'>
                <a href='index.php?like=<?=$r['id']?>'>
                    <?php Like('Positive');?>
                </a>
                <a href='index.php?dislike=<?=$r['id']?>'>
                    <?php Like('negative');?>
                </a>
            </span>
            <!-- END - Like System -->

        </span>
    </div>

<?php  endforeach; ?>
</div>

<?php include ('overall_footer.php'); ?>
