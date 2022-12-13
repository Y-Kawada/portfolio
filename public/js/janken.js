$(function() {
    const window_width = $(".container").width()
                              - Number($(".container").css('padding-left').replace('px', ''))
                              - Number($(".container").css('padding-right').replace('px', ''));
    const image_width = window_width / 3;
    console.log(image_width);

    let gu_width = $('#gu').width();
    let gu_height = $('#gu').height();
    const gu_ratio = gu_height / gu_width;
    gu_width = image_width;
    gu_height = gu_ratio * gu_width;
    $("#gu").css("width", gu_width);
    $("#gu").css("height", gu_height);
    $("#gu_img").css("width", gu_width
                                - Number($("#gu").css('padding-left').replace('px', ''))
                                - Number($("#gu").css('padding-right').replace('px', ''))
                                - Number($("#gu").css('border-left-width').replace('px', ''))
                                - Number($("#gu").css('border-right-width').replace('px', '')));
    $("#gu_img").css("height", gu_height
                                - Number($("#gu").css('padding-top').replace('px', ''))
                                - Number($("#gu").css('padding-bottom').replace('px', ''))
                                - Number($("#gu").css('border-top-width').replace('px', ''))
                                - Number($("#gu").css('border-bottom-width').replace('px', '')));

    let choki_width = $('#choki').width();
    let choki_height = $('#choki').height();
    const choki_ratio = choki_height / choki_width;
    choki_width = image_width;
    choki_height = choki_ratio * choki_width;
    $("#choki").css("width", choki_width);
    $("#choki").css("height", choki_height);
    $("#choki_img").css("width", gu_width
                                - Number($("#choki").css('padding-left').replace('px', ''))
                                - Number($("#choki").css('padding-right').replace('px', ''))
                                - Number($("#choki").css('border-left-width').replace('px', ''))
                                - Number($("#choki").css('border-right-width').replace('px', '')));
    $("#choki_img").css("height", gu_height
                                - Number($("#choki").css('padding-top').replace('px', ''))
                                - Number($("#choki").css('padding-bottom').replace('px', ''))
                                - Number($("#choki").css('border-top-width').replace('px', ''))
                                - Number($("#choki").css('border-bottom-width').replace('px', '')));

    let pa_width = $('#pa').width();
    let pa_height = $('#pa').height();
    const pa_ratio = pa_height / pa_width;
    pa_width = image_width;
    pa_height = pa_ratio * pa_width;
    $("#pa").css("width", pa_width);
    $("#pa").css("height", pa_height);
    $("#pa_img").css("width", gu_width
                                - Number($("#pa").css('padding-left').replace('px', ''))
                                - Number($("#pa").css('padding-right').replace('px', ''))
                                - Number($("#pa").css('border-left-width').replace('px', ''))
                                - Number($("#pa").css('border-right-width').replace('px', '')));
    $("#pa_img").css("height", gu_height
                                - Number($("#pa").css('padding-top').replace('px', ''))
                                - Number($("#pa").css('padding-bottom').replace('px', ''))
                                - Number($("#pa").css('border-top-width').replace('px', ''))
                                - Number($("#pa").css('border-bottom-width').replace('px', '')));

})


function janken(hand1) {
  const hand2 = Math.floor( Math.random() * (2 + 1) );
  let status = "";
  if(hand1 == hand2){
    status = "Draw!";
    switch(hand1) {
      case 0:
        $("#choki").hide();
        $("#pa").hide();
        break;
      case 1:
        $("#gu").hide();
        $("#pa").hide();
        break;
      case 2:
        $("#gu").hide();
        $("#choki").hide();
        break;
    }
  }else if(hand1 == 0){
    switch(hand2){
      case 1:
        status = "You win!";
        break;
      case 2:
        status = "You lose.";
        break;
    }
    $("#choki").hide();
    $("#pa").hide();
  }else if(hand1 == 1){
    switch(hand2){
      case 2:
        status = "You win!";
        break;
      case 0:
        status = "You lose.";
        break;
    }
    $("#gu").hide();
    $("#pa").hide();
  }else if(hand1 == 2){
    switch(hand2){
      case 0:
        status = "You win!";
        break;
      case 1:
        status = "You lose.";
        break;
    }
    $("#gu").hide();
    $("#choki").hide();
  }

  $("#gu").get(0).onclick = "";
  $("#choki").get(0).onclick = "";
  $("#pa").get(0).onclick = "";

  $("#vs").show();

  switch (hand2) {
    case 0:
      $("#hand2").attr('src', "../img/gu.png");
      $("#hand2").css("width", $("#gu_img").width());
      $("#hand2").css("height", $("#gu_img").height());
      break;
    case 1:
      $("#hand2").attr('src', "../img/choki.png");
      $("#hand2").css("width", $("#choki_img").width());
      $("#hand2").css("height", $("#choki_img").height());
      break;
    case 2:
      $("#hand2").attr('src', "../img/pa.png");
      $("#hand2").css("width", $("#pa_img").width());
      $("#hand2").css("height", $("#pa_img").height());
      break;
  }

  $("#status").text(status);
  $("<button>", {
      onclick: "window.location.reload()",
      text: "もう一度！"
    }).appendTo('#reload');
}
