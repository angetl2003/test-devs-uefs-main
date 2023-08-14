<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postagens do usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="antialiased">
<div class="container">
        <h2 class="text-center mb-4">Associar post a <?php echo e($user->name); ?></h2>
    <form method="POST" action="<?php echo e(route('postUser.storeAssociate', $user->id)); ?>" >
        <?php echo csrf_field(); ?>
     
        <label for="post_id">Selecione a postagem:</label>
        <select name="post_id" id="post_id">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($post->id); ?>"><?php echo e($post->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <br><br>

        <button type="submit">Associar</button>
    </form>
    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success mb-3">Nova Postagem</a>
   
</div>
</body>
</html>
<?php /**PATH /Users/angelatrindadeluzsantos/Downloads/test-devs-uefs-main/resources/views/postUser/associate.blade.php ENDPATH**/ ?>