
<script src="https://www.emersonecologics.com/WebResource.axd?d=sjo7yyX0KWhwrKa512HE5w2&amp;t=633834052103732959" type="text/javascript"></script>
<script src="https://www.emersonecologics.com/ScriptResource.axd?d=_WiSJWt_5UNeyfBo5-CqS8OLcpZsKA1D2MMYKnqehhDKg-FBRsXBw6QR7mnuTMIA3gva9h8MbZGrk0W75sXj1xOa86Afxxi3bbw7ZWW3f3E1&amp;t=11f52466" type="text/javascript"></script>
<script src="https://www.emersonecologics.com/ScriptResource.axd?d=_WiSJWt_5UNeyfBo5-CqS8OLcpZsKA1D2MMYKnqehhDKg-FBRsXBw6QR7mnuTMIAw9zefGwLTz0GJzxdeLsXKWSAsuiWTfEXso1Cy4xyJYo1&amp;t=11f52466" type="text/javascript"></script>
<script src="https://www.emersonecologics.com/AdvancedSearch.asmx/js" type="text/javascript"></script>

        function getViewPort() {

            var x = this.document.body.scrollWidth;
            var y = this.document.body.scrollHeight;

            var hidx = $get('ctl00_ctl00_hidWidth');
            var hidy = $get('ctl00_ctl00_hidHeight');


            if (x > 0 && y > 0) {
                if (hidx != null) {
                    hidx.value = x;
                }
                if (hidy != null) {
                    hidy.value = y;
                }

            }
        }

        function disableMe(input) {

            input.disabled = true;

        }

        function checkAll(cb) {
            var checked = cb.checked;
            //alert(cb.id);
            var tname = cb.id;
            tname = tname.replace('_ctl01_chkSelect', '');
            tname = tname.replace('_ctl02_chkSelect', '');
            tname = tname.replace('_chkAllSelect', '_gvSR');
            //alert(tname);

            table = $get(tname);
            rows = table.rows.length;
            cols = table.rows[0].cells.length;

            for (line = 1; line < rows; line++) {
                for (node = 0; node < table.rows[line].cells[0].childNodes.length; node++) {
                    if (table.rows[line].cells[0].childNodes[node].id) {
                        var selNode = table.rows[line].cells[0].childNodes[node];
//                        if (line < 5) {
//                            alert(selNode);
//                        }
                        selNode.checked = checked;
                        selNode.disabled = false;

                    }
                }
            }
        }

        function preloadRolloverImages() {
			return true;
        }        