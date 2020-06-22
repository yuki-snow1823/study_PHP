(function() {
    "use strict";

    var cmds = document.getElementsByClassName("del");
    var i;

    for (i = 0; i < cmds.length; i++) {
        cmds[i].addEventListener("click", function(e) {
            e.preventDefault(); // aタグの「リンクにとぶ」という機能を無効化
            if (confirm("are you sure?")) {
                document.getElementById("form_" + this.dataset.id).submit();
            }
        });
    }
})();
