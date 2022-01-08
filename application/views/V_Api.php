<!DOCTYPE html>
<html>
<head>
<?php require_once 'inc/css.php'; ?>
</head>

<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <?php require_once 'inc/nav.php'; ?>
            <div class=" wrapper-content">
                <div class="container">
                    <div class="row">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>i18next configuration</h5>
                            </div>

                            <div class="ibox-content">


                                <h3>Step 1</h3>
                                <p>
                                    To add i18 support for your app you need to define what text you would like to translate. The best way to define your text is to store it in external json file.
                                    For example:
                                </p>
                                <strong>
                                    Each language you should have own json file!
                                </strong>

                                <div class="row">

                                    <div class="col-md-6">
                                        <h5>en.json</h5>
<pre>
"app":
"name": "INSPINIA 2.4"
},
"nav":
"dashboard": "Dashboards",
"graphs": "Graphs",
"mailbox": "Mailbox",
},
}</pre>
                            </div>
                            <div class="col-md-6">
                                <h5>es.json</h5>
<pre>
"app":
"name": "INSPINIA 2.4"
},
"nav":
"dashboard": "Salpicadero",
"graphs": "Gráficos",
"mailbox": "El correo",
},
}</pre>
                    </div>

                </div>

                <h3>Step 2</h3>
                <p>
                    Next you need to add html indicators in all place you want to use i18.
                </p>
<pre>&lt;div id="i18_links"&gt;
&lt;span data-i18n="nav.dashboard"&gt; &lt;/span&gt;
&lt;span data-i18n="nav.graphs"&gt; &lt;/span&gt;
&lt;span data-i18n="nav.mailbox"&gt; &lt;/span&gt;
&lt;/div&gt;
</pre>
            </div>
        </div>


    </div>
</div>

</div>


<div class="footer">
    <div>
        <strong>Guillermo Landazuri Amaya</strong>
    </div>
</div>

</div>
</div>
<?php require_once 'inc/js.php'; ?>



</body>

</html>
