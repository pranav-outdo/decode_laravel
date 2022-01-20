@extends('layouts.master')
@section('content')
<div class="resources-shape w-100 d-inline-block">
    <!-- Hero_Resources -->
    <section class="hero-resources solution-hero w-100 d-inline-block">
        <div class="container">
            <div class="hero-top text-center w-100 d-inline-block p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="heor-content">
                            <h1 class="hero-title fw-bold mb-0">The need to Decode</h1>
                            <p class="heor-discretion">All you need to make the most of your conversations with Emotion AI</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <img src="{{asset('img/resources/resources-banner.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book_Download -->
    @includeWhen($resource, 'front.resources.e-books', ['type' => 'e-books'])
   
    <!-- Content_Vault -->
    <section class="content-vault w-100 d-inline-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="content-title text-center">
                        <h2 class="integrations-title fw-bold">Decode Content Vault</h2>
                        <div class="filters-field d-flex justify-content-center">
                            <div class="custom-select" id="type-select-drop">
                                <select name="type" id="type">
                                    <option value="0">All types</option>
                                    @forelse ($types as $ket =>  $tp)
                                        @if($ket == 0)
                                            <option value="0">All types</option>
                                        @endif
                                        <option value="{{ $tp->id }}">{{ $tp->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="custom-select select-content" id="topic-select-drop">
                                <select name="topic" id="topic">
                                    <option value="0">All topics</option>
                                    @forelse ($topics as $tkey => $top)
                                        @if($tkey == 0)
                                            <option value="0">All topics</option>
                                        @endif
                                        <option value="{{ $top->id }}">{{ $top->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="search-container position-relative">
                                <input type="text" name="search" id="search" class="bg-whitecolor" placeholder="Search" value="">
                                <button type="button"><i class="fa fa-search"></i></button>
                                
                            </div>
                        </div>
                        <div class="row" id="contentVaultDiv">
                            {{--  @includeWhen($contentVaults, 'front.resources.content_vault', ['type' => 'e-books'])     --}}
                            <div id="vaultNotShow" style="margin-bottom: 292px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="integrations-box sounds-box text-center mt-0">
            <h2 class="integrations-title fw-bold mb-3">Sounds Interesting?</h2>
            <a href="{{ route('/') }}#early-access" class="free-trail font-weight-bold text-center m-0">Get Beta</a>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                /*when an item is clicked, update the original select box,
            and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x,
            y,
            i,
            xl,
            yl,
            arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i);
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>
<script>
    window.onload = (event) => {
        console.log('page is fully loaded');
        var  window_load = localStorage.setItem("window_load", '0');
        
    };
    
    contentVaultShow();
    $( ".select-items").click(function() {
        contentVaultShow();
    });

    $('#topic').focus(function() {
        console.log('Handler for .topic() called.');
        contentVaultShow();
    });

    $('#search').on('input',function(e){
        // alert('Changed!')
        contentVaultShow();
    });
    
    function contentVaultShow() 
    {
        let type_id = $( "#type option:selected" ).val();
        let topic_id = $( "#topic option:selected" ).val();
        let search = $('#search').val();

        // console.log('search-list', search);
        // console.log('type:', type)
        // console.log('topic:', topic)

        $.ajax({
            url: "{{ route('content-vault-data') }}",
            method: "GET",  
            data:{search:search, type_id:type_id, topic_id:topic_id},
            success:function(data){
                // console.log('data-response:', data)
                if(data.list == 1)
                {
                    $('#contentVaultDiv').html(data.html);
                    document.getElementById("search").style.border = '';
                    document.getElementById("search").style.color = '';

                    document.getElementById("type-select-drop").style.border = '';
                    document.getElementById("topic-select-drop").style.color = '';

                    document.getElementById("topic-select-drop").style.border = '';
                    document.getElementById("topic-select-drop").style.color = '';

                }else{
                    // $('#contentVaultDiv').html('<div id="vaultNotShow" style="margin: 144px 0px;"></div>');
                    console.log('test');
                    // $('#search').html('Not Found');
                    var  window_load = localStorage.getItem("window_load");
                    console.log('window_load', window_load)
                    
                    if(window_load == 0)
                    {
                        var  window_load = localStorage.setItem("window_load", '1');
                                            
                        // alert('Data not found')
                    }else{
                        document.getElementById("search").style.border = '2px solid red';
                        document.getElementById("search").style.color = 'red';

                        document.getElementById("type-select-drop").style.border = '2px solid red';
                        document.getElementById("type-select-drop").style.color = 'red';

                        document.getElementById("topic-select-drop").style.border = '2px solid red';
                        document.getElementById("topic-select-drop").style.color = 'red';    
                    }
                    
                }
            }  
        });  
    };
   
</script>
@endsection
