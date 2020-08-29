require('jquery');
require('datepicker');

import noUiSlider from 'nouislider';
import 'nouislider/distribute/nouislider.css';
import 'jquery-ui/themes/base/all.css';
import './styles.css';




$(document).ready(function() {
        //input fields check
        document.getElementById('sum').onblur = function() {
          var input = parseInt(this.value);
          if(input < 1000 || input > 3000000) {
            this.classList.add('red');
          }
        }

        document.getElementById('sum').onfocus = function() {
          if (this.classList.contains('red')) {
            this.classList.remove('red');
          }
        }

        document.getElementById('enlarge-sum').onblur = function() {
          var input = parseInt(this.value);
          if(input < 1000 || input > 3000000) {
            this.classList.add('red');
          }
        }

        document.getElementById('enlarge-sum').onfocus = function() {
          if (this.classList.contains('red')) {
            this.classList.remove('red');
          }
        }

        //handling ranges
        var rangeSum = document.getElementById('sum-range');

        noUiSlider.create(rangeSum, {
          range: {
              'min': 1000,
              'max': 3000000
          },
          start: [1000000],
          connect: 'lower',
        });

        var inputSum = document.getElementById('sum');
        rangeSum.noUiSlider.on('update', function (values, handle) {
            inputSum.value = values[handle];
        });

        var rangeEnlargeSum = document.getElementById('enlarge-sum-range');

        noUiSlider.create(rangeEnlargeSum, {
          range: {
              'min': 1000,
              'max': 3000000
          },
          start: [1000000],
          connect: 'lower',
        });

        var inputEnlargeSum = document.getElementById('enlarge-sum');
        rangeEnlargeSum.noUiSlider.on('update', function (values, handle) {
            inputEnlargeSum.value = values[handle];
        });

        //adding datepicker
        $(function(){
          $("#calendar").datepicker({
            dateFormat: "dd.mm.yy"
          });
        })

        //ajax
        $("#form").on("submit", function(e) {
          e.preventDefault();
          var sum = parseInt($("#sum").val());
          var enlargeSum = parseInt($("#enlarge-sum").val());
          if(sum < 1000 || sum > 3000000) {
            $("#sum").focus();
          } else if (enlargeSum < 1000 || enlargeSum > 3000000 ) {
            $("#enlarge-sum").focus();
          } else {
            $.ajax({
              url: '/calc.php',
              method: 'post',
              dataType: 'html',
              data: $(this).serialize(),
              success: function(data) {
                $('#result').html(data);
              }
            })
          }

        })
    });
