
                    function searchFunctionUser() {
                      var input, filter, table, tr, td, i;
                      input = document.getElementById("search1");
                      filter = input.value.toUpperCase();
                      table = document.getElementById("userTable");
                      tr = table.getElementsByTagName("tr");
                      for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                          } else {
                            tr[i].style.display = "none";
                          }
                        }
                      }
                    }

                     function searchFunctionProduct() {
                      var input, filter, table, tr, td, i;
                      input = document.getElementById("search2");
                      filter = input.value.toUpperCase();
                      table = document.getElementById("productTable");
                      tr = table.getElementsByTagName("tr");
                      for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                          } else {
                            tr[i].style.display = "none";
                          }
                        }
                      }
                    }