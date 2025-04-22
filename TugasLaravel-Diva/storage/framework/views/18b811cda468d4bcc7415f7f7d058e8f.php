<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stasiun Berhantu</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 2rem;
            background-color: #1a1a1a;
            color: white;
        }
        h1 {
            color: crimson;
        }
        .station {
            border-left: 5px solid crimson;
            padding: 1rem;
            margin-bottom: 1rem;
            background-color: #2a2a2a;
        }
    </style>
</head>
<body>
    <h1>👻 Stasiun Kereta Berhantu</h1>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="station">
            <h2><?php echo e($s->name); ?> (<?php echo e($s->country); ?>)</h2>
            <p><strong>Dibangun:</strong> <?php echo e($s->year_built); ?></p>
            <p><strong>Status:</strong> <?php echo e($s->is_active ? 'Aktif' : 'Nonaktif'); ?></p>
            <p><?php echo e($s->haunted_story); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stasiun Kereta Berhantu</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #1a1a1a;
            color: white;
            padding: 2rem;
        }
        h1 {
            color: crimson;
            margin-bottom: 1rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #2a2a2a;
        }
        th, td {
            padding: 12px;
            border: 1px solid #444;
            text-align: left;
        }
        th {
            background-color: #3a3a3a;
            color: crimson;
        }
        tr:nth-child(even) {
            background-color: #1f1f1f;
        }
    </style>
</head>
<body>
    <h1>👻 Daftar Stasiun Kereta Berhantu</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Stasiun</th>
                <th>Negara</th>
                <th>Tahun Dibangun</th>
                <th>Status</th>
                <th>Cerita Horor</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($s->name); ?></td>
                    <td><?php echo e($s->country); ?></td>
                    <td><?php echo e($s->year_built); ?></td>
                    <td><?php echo e($s->is_active ? 'Aktif' : 'Nonaktif'); ?></td>
                    <td><?php echo e($s->haunted_story); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\tugas wad\tugas_wad\resources\views/index.blade.php ENDPATH**/ ?>