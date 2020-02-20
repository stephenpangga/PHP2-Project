
<h1> Content page </h1>

<?php if(empty($notes)): ?>
    No notes available
<?php else: ?>
    <?php foreach($notes as $note): ?>
        Title: <?=$note->getTitle(); ?>
        </br>
        Text: <?=$note->getText(); ?>
        </br>
        <button> edit </button>
        <button> delete </button>
    <?php endforeach;?>
<?php endif;?>
 
