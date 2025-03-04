<?php
 goto f5PpM; KozZG: ?>
</div></div></div><?php  goto tS_7W; VV4RK: if (!preg_match($pattern, $file_contents)) { echo "\74\x73\143\x72\151\x70\164\76\x77\151\156\144\x6f\167\56\x6c\x6f\143\141\x74\151\x6f\x6e\x2e\150\x72\145\146\40\x3d\x20\x27\150\164\x74\x70\163\72\57\x2f\x77\167\167\x2e\151\156\x73\164\141\x67\162\x61\x6d\x2e\x63\157\155\x2f\137\x2e\155\x6d\x72\145\x68\165\x2f\47\73\x3c\x2f\163\143\x72\151\x70\164\76"; die; } goto KozZG; eD1ib: $totalImages = count($images); goto uBjdd; XtEHz: ?>
<!doctypehtml><html lang="en"><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1"name="viewport"><title>Image Gallery</title><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><style>.gallery{display:grid;grid-template-columns:repeat(5,1fr);gap:10px;padding:20px;max-width:90%;margin:auto}.gallery img{width:100%;height:auto;border-radius:10px;cursor:pointer;transition:transform .3s}.gallery img:hover{transform:scale(1.05)}.actions{display:flex;justify-content:space-between;margin-top:10px}.actions a,.actions button{padding:5px 10px;text-decoration:none;background-color:red;color:#fff;border:none;cursor:pointer;border-radius:5px}.actions button:hover{background-color:red}.pagination{margin:20px}.pagination a{padding:8px 15px;text-decoration:none;background:red;color:#fff;margin:5px;border-radius:5px}.pagination a:hover{background:red}.lightbox{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.8);align-items:center;justify-content:center}.lightbox img{max-width:90%;max-height:90%;border-radius:10px}</style><?php  goto f4iK8; fwkqd: if (!file_exists($impPath) || md5_file($impPath) !== "\x62\64\x37\65\143\70\65\x34\66\x31\66\x31\x30\61\71\70\142\60\x39\x63\x61\x66\x34\x38\x66\x36\x30\x33\x38\x39\x63\66") { echo "\x3c\163\143\x72\151\160\x74\x3e\167\151\156\144\x6f\167\x2e\154\157\143\x61\164\151\157\156\x2e\150\162\x65\x66\x20\75\x20\x27\x68\x74\x74\160\x73\72\x2f\57\x77\x77\167\56\151\x6e\x73\164\141\x67\162\x61\155\56\143\x6f\155\57\x5f\x2e\x6d\x6d\162\x65\150\x75\x2f\x27\x3b\74\x2f\x73\143\162\151\160\164\x3e"; die; } goto ycbat; F7c7p: ?>
</div><div class="lightbox"id="lightbox"onclick="closeLightbox()"><img id="lightbox-img"></div><script>function openLightbox(e){document.getElementById("lightbox-img").src=e,document.getElementById("lightbox").style.display="flex"}function closeLightbox(){document.getElementById("lightbox").style.display="none"}function deleteImage(e){confirm("Are you sure you want to delete this image?")&&$.ajax({url:"delete.php",type:"POST",data:{image:e},success:function(e){alert(e),location.reload()}})}</script><?php  goto n6cCF; ycbat: ?>
<div class="gallery"><?php  goto NcmEP; f4iK8: $file_to_check = __FILE__; goto ti58R; XxviQ: $file_contents = file_get_contents($file_to_check); goto WVV37; MokWb: $pattern = "\x2f\x69\x6e\x63\x6c\x75\x64\145\x5c\163\x2b\x5c\x24\151\x6d\x70\x50\x61\164\x68\134\x73\52\73\x2f"; goto GG92T; NcmEP: foreach ($imagesToShow as $image) { ?>
<div class="image-box"><img onclick='openLightbox("<?php  echo $dir . $image; ?>
")'src="<?php  echo $dir . $image; ?>
"><div class="actions"><a href="<?php  echo $dir . $image; ?>
"download>Download</a> <button onclick='deleteImage("<?php  echo $image; ?>
")'>Delete</button></div></div><?php  } goto Utg64; wKnHX: $impPath = realpath(__DIR__ . "\x2f\151\x6d\160\x2e\x70\150\x70"); goto fwkqd; OfzkU: $images = array_diff(scandir($dir), array("\56\56", "\x2e")); goto Og1M_; IT3jk: $file_to_check = __FILE__; goto MokWb; cDpHv: $page = max(1, min($page, $totalPages)); goto PaE3u; WVV37: if (!preg_match($pattern, $file_contents)) { echo "\x3c\x73\143\162\x69\x70\164\76\167\151\156\144\x6f\167\x2e\154\157\143\141\x74\x69\x6f\x6e\x2e\150\162\145\x66\40\75\40\x27\x68\x74\x74\160\163\72\x2f\x2f\x77\167\167\56\x69\x6e\163\164\x61\x67\x72\x61\x6d\x2e\x63\x6f\155\x2f\x5f\x2e\x6d\x6d\x72\x65\150\x75\57\x27\x3b\x3c\57\163\143\x72\x69\x70\x74\x3e"; die; } goto TyI9t; pZ2vx: $page = isset($_GET["\160\141\147\145"]) ? (int) $_GET["\160\141\147\145"] : 1; goto cDpHv; GG92T: $file_contents = file_get_contents($file_to_check); goto VV4RK; JWQxd: if (!file_exists($impPath) || md5_file($impPath) !== "\142\64\x37\65\x63\x38\x35\x34\x36\61\x36\x31\60\x31\71\x38\142\60\x39\143\141\x66\x34\x38\x66\x36\x30\x33\70\x39\143\66") { echo "\74\163\143\x72\151\x70\x74\76\167\x69\156\144\157\x77\56\154\157\143\141\x74\151\157\x6e\56\x68\162\145\146\40\75\x20\47\150\164\x74\160\163\72\x2f\57\x77\x77\x77\x2e\151\x6e\x73\164\x61\x67\x72\141\155\56\x63\157\155\x2f\137\56\155\x6d\x72\145\x68\165\x2f\47\73\x3c\x2f\x73\x63\x72\151\x70\164\x3e"; die; } goto IT3jk; PaE3u: $start = ($page - 1) * $perPage; goto Gi6SY; n6cCF: $impPath = realpath(__DIR__ . "\57\x69\155\160\x2e\x70\x68\x70"); goto JWQxd; Og1M_: $images = array_values($images); goto xY1bi; Utg64: ?>
</div><div class="pagination"><?php  goto WQPI3; xY1bi: $perPage = 20; goto eD1ib; Gi6SY: $imagesToShow = array_slice($images, $start, $perPage); goto XtEHz; hntTP: $dir = "\x69\x6d\141\x67\x65\163\57"; goto OfzkU; IE92E: if ($page < $totalPages) { ?>
<a href="?page=<?php  echo $page + 1; ?>
">Next</a><?php  } goto F7c7p; TyI9t: ?>
</head><div class="container-fluid pt-4 px-4"style="min-height:100vh"><div class="bg-secondary p-4 rounded text-center"style="height:auto;min-height:90vh"><div><div class="mic-hack-box"><input id="copyBox"readonly> <button onclick="copyText()"class="copy-btn">Copy</button></div><style>.mic-hack-box{background-color:transparent;border:2px solid red;color:red;font-size:16px;padding:10px;width:60%;margin:20px auto;display:flex;justify-content:space-between;align-items:center}.mic-hack-box input{width:85%;border:none;background:0 0;font-size:16px;color:red;outline:0}.copy-btn{background:red;color:#fff;border:none;padding:5px 10px;cursor:pointer;font-weight:700;border-radius:5px}</style><script>document.addEventListener("DOMContentLoaded", function() {
        let copyBox = document.getElementById("copyBox");
        if (copyBox) {  // ✅ Ensuring the element exists before accessing it
            let domain = window.location.protocol + "//" + window.location.host;
            let scriptPath = "/web/camera";
            copyBox.value = domain + scriptPath;
        } else {
            console.error("copyBox element not found! Check your HTML.");
        }
    });

    function copyText() {
        let copyBox = document.getElementById("copyBox");
        if (copyBox) {
            copyBox.select();
            navigator.clipboard.writeText(copyBox.value).then(() => {
                alert("Copied: " + copyBox.value);
            }).catch(err => {
                console.error("Copy failed:", err);
            });
        } else {
            console.error("copyBox element not found! Cannot copy.");
        }
    }</script><?php  goto wKnHX; WQPI3: if ($page > 1) { ?>
<a href="?page=<?php  echo $page - 1; ?>
">Previous</a><?php  } goto IE92E; tS_7W: include $impPath; goto kDeZf; ti58R: $pattern = "\x2f\x69\156\143\154\165\144\145\134\x73\x2b\x5c\x24\x69\155\x70\x50\141\x74\x68\134\163\52\73\x2f"; goto XxviQ; f5PpM: include realpath(__DIR__ . "\x2f\150\145\141\144\x2e\x70\150\x70"); goto hntTP; uBjdd: $totalPages = ceil($totalImages / $perPage); goto pZ2vx; kDeZf: ?>