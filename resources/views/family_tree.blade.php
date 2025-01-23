<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Tree Chart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .member {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            display: inline-block;
            flex-direction: column;
            text-align: center;
            width: 150px; /* Set width for better alignment */
        }
        .memberchild {
            
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            display: inline-block;
            flex-direction: column;
            text-align: center;
            width: 150px; /* Set width for better alignment */
        }
        .tree {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .children {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 10px; /* Space between levels */
        }
    </style>
</head>
<body>
    <h1>Family Tree Chart</h1>
    <div class="tree">
        @for ($i = 0; $i < count($members); $i++)
            @include('family_tree_node', ['member' => $members[$i]])
        @endfor
    </div>
</body>
</html>