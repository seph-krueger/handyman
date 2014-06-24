var html = '<style type="text/css">';
	html += '@import url(http://fonts.googleapis.com/css?family=Open+Sans);';
	html += ' .img-scirpt{';
	html += ' width:130px;';
	html += ' }';
	html += ' .referral-link:hover {';
	html += ' text-decoration: none;';
	html += ' }';
	html +=' .wrap-link {';
	html +=' font-size: 12px;';
	html +=' }';
	html +=' .wrap-link a{';
	html +=' display:inline-block;';
	html +=' }';
	html += ' .wrap-widget-badge{';
	html += ' width: 250px;';
	html += ' font-family: sans-serif;';
	html += ' padding: 10px;';
	html += ' max-height: 250px;';
	html += ' height: 250px;';
	html += ' -moz-box-sizing: border-box;';
	html += ' box-sizing: border-box;';
	html += ' border: 1px solid #ddd;';
	html += ' border-radius: 3px;';
	html += ' background-color: #fff;';
	html += ' }';
	html += ' a {';
	html += ' color: #428BCA;';
	html += ' text-decoration: none;';
	html += ' }';
	html += ' a:hover,a:focus{';
	html += ' color: #2a6496;';
	html += ' text-decoration: underline;';
	html += ' }';
	html += ' .text-center{';
	html += ' text-align: center;';
	html += ' }';
	html += ' .btn {';
	html += ' display: inline-block;';
	html += ' padding: 5px 12px;';
	html += ' margin-bottom: 0;';
	html += ' font-size: 14px;';
	html += ' font-weight: normal;';
	html += ' line-height: 1.42857143;';
	html += ' text-align: center;';
	html += ' white-space: nowrap;';
	html += ' vertical-align: middle;';
	html += ' cursor: pointer;';
	html += ' -webkit-user-select: none;';
	html += ' -moz-user-select: none;';
	html += ' -ms-user-select: none;';
	html += ' user-select: none;';
	html += ' background-image: none;';
	html += ' border: 1px solid transparent;';
	html += ' border-radius: 4px;';
	html += ' }';
	html += ' .btn:focus,';
	html += ' .btn:active:focus,';
	html += ' .btn.active:focus {';
	html += ' outline: thin dotted;';
	html += ' outline: 5px auto -webkit-focus-ring-color;';
	html += ' outline-offset: -2px;';
	html += ' }';
	html += ' .btn:hover,';
	html += ' .btn:focus {';
	html += ' color: #333;';
	html += ' text-decoration: none;';
	html += ' }';
	html += ' .btn-danger {';
	html += ' color: #fff;';
	html += ' background-color: #d9534f;';
	html += ' border-color: #d43f3a;';
	html += ' }';
	html += ' .btn-danger:hover,';
	html += ' .btn-danger:focus,';
	html += ' .btn-danger:active,';
	html += ' .btn-danger.active,';
	html += ' .open .dropdown-toggle.btn-danger {';
	html += ' color: #fff;';
	html += ' background-color: #d2322d;';
	html += ' border-color: #ac2925;';
	html += ' }';
	html += ' .form-control {';
	html += ' display: block;';
	html += ' width: 100%;';
	html += ' height: 34px;';
	html += ' padding: 6px 12px;';
	html += ' font-size: 14px;';
	html += ' line-height: 1.42857143;';
	html += ' color: #555;';
	html += ' background-color: #fff;';
	html += ' background-image: none;';
	html += ' border: 1px solid #ccc;';
	html += ' border-radius: 4px;';
	html += ' -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);';
	html += ' box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);';
	html += ' -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;';
	html += ' transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;';
	html += ' }';
	html += ' .form-control:focus {';
	html += ' border-color: #66afe9;';
	html += ' outline: 0;';
	html += ' -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);';
	html += ' box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);';
	html += ' }';
	html += ' .form-control::-moz-placeholder {';
	html += ' color: #999;';
	html += ' opacity: 1;';
	html += ' }';
	html += ' .form-control:-ms-input-placeholder {';
	html += ' color: #999;';
	html += ' }';
	html += ' .form-control::-webkit-input-placeholder {';
	html += ' color: #999;';
	html += ' }';
	html += ' .input-group-addon,';
	html += ' .input-group-btn {';
	html += ' width: 1%;';
	html += ' white-space: nowrap;';
	html += ' vertical-align: middle;';
	html += ' }';
	html += ' .input-group-btn {';
	html += ' position: relative;';
	html += ' font-size: 0;';
	html += ' white-space: nowrap;';
	html += ' }';
	html += ' .input-group .form-control {';
	html += ' position: relative;';
	html += ' z-index: 2;';
	html += ' float: left;';
	html += ' width: 100%;';
	html += ' margin-bottom: 0;';
	html += ' }';
	html += ' .input-group-addon,';
	html += ' .input-group-btn,';
	html += ' .input-group .form-control {';
	html += ' display: table-cell;';
	html += ' }';
	html += ' .input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child > .btn,.input-group-btn:first-child > .btn-group > .btn,.input-group-btn:first-child > .dropdown-toggle,.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {';
	html += ' border-top-right-radius: 0;';
	html += ' border-bottom-right-radius: 0;';
	html += ' }';
	html += ' .input-group {';
	html += ' position: relative;';
	html += ' display: table;';
	html += ' border-collapse: separate;';
	html += ' }';
	html += ' input{';
	html += ' color: inherit;';
	html += ' font: inherit;';
	html += ' margin: 0;';
	html += ' line-height: normal;';
	html += ' }';
	html += ' .input-group .form-control:first-child, ';
	html += ' .input-group-addon:first-child, ';
	html += ' .input-group-btn:first-child > .btn, ';
	html += ' .input-group-btn:first-child > .btn-group > .btn, ';
	html += ' .input-group-btn:first-child > .dropdown-toggle, ';
	html += ' .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle), ';
	html += ' .input-group-btn:last-child > .btn-group:not(:last-child) > .btn { ';
	html += '   border-top-right-radius: 0; ';
	html += '   border-bottom-right-radius: 0; ';
	html += ' } ';
	html += ' .input-group-addon:first-child { ';
	html += '   border-right: 0; ';
	html += ' } ';
	html += ' .input-group .form-control:last-child, ';
	html += ' .input-group-addon:last-child, ';
	html += ' .input-group-btn:last-child > .btn, ';
	html += ' .input-group-btn:last-child > .btn-group > .btn, ';
	html += ' .input-group-btn:last-child > .dropdown-toggle, ';
	html += ' .input-group-btn:first-child > .btn:not(:first-child), ';
	html += ' .input-group-btn:first-child > .btn-group:not(:first-child) > .btn { ';
	html += '   border-top-left-radius: 0; ';
	html += '   border-bottom-left-radius: 0; ';
	html += ' } ';
	html += ' .input-group-addon:last-child { ';
	html += '   border-left: 0; ';
	html += ' } ';
	html += ' .input-group-btn { ';
	html += '   position: relative; ';
	html += '   font-size: 0; ';
	html += '   white-space: nowrap; ';
	html += ' } ';
	html += ' .input-group-btn > .btn { ';
	html += '   position: relative; ';
	html += ' } ';
	html += ' .input-group-btn > .btn + .btn { ';
	html += '   margin-left: -1px; ';
	html += ' } ';
	html += ' .input-group-btn > .btn:hover, ';
	html += ' .input-group-btn > .btn:focus, ';
	html += ' .input-group-btn > .btn:active { ';
	html += '   z-index: 2; ';
	html += ' } ';
	html += ' .input-group-btn:first-child > .btn,';
	html += ' .input-group-btn:first-child > .btn-group { ';
	html += '   margin-right: -1px; ';
	html += ' } ';
	html += ' .input-group-btn:last-child > .btn, ';
	html += ' .input-group-btn:last-child > .btn-group { ';
	html += '   margin-left: -1px; ';
	html += ' } ';
	html += '</style>';
	html += '<div class="wrap-thumb">';
	html += '<div class="wrap-widget-badge text-center">';
	html += ' <img class="img-scirpt" src="http://d2qcctj8epnr7y.cloudfront.net/images/jayson/badge-handyman-1.png">';
	html += ' <form action="<?echo $aff_id?>" ><div class="input-group">';
	html += ' <input type="text" placeholder="" class="form-control">';
	html += ' <input type="hidden" name="url" value="http://handyman.com" >';
	html += ' <span class="input-group-btn">';
	html += ' <button class="btn btn-danger" >Go</button>';
	html += ' </span>';
	html += ' </div></form>';
	html += '<div class="wrap-link"> Get our <a class="referral-link" href="http://www.handyman.com">Handyman Tools</a> or ';
	html += ' <a class="referral-link" href="<?echo $aff_id?>&url=http://handyman.com">Signup for our Handyman Referral Program</a> </div>';
	html += '</div>';
	html += '</div>';
	document.write(html);