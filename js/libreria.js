$(function(){
	//$(selector).evento(function(e){});

	//etiqueta:$("body")   --->document.getElementByTagName("body")
	//clase:$(."container")--->document.getElementByClassName("container")
	//id:$("navegador")    --->document.getElementById("navegador")

	$("#frmbuscar #txtcodigo").focusout(function(e){
		e.preventDefault();
		var codmar = $(this).val();
		if (codmar != "") {
			$.ajax({
				url:"../controler/buscar.php",
				type:"POST",
				data:{codmar:codmar},
				success: function(rpta){
					var rp=JSON.parse(rpta);
					if(rp.datos["estado"]){
						alert("el codigo " +codmar+" no existe...");
						$("#frmbuscar #txtcodigo").val("");
						$("#frmbuscar #txtcodigo").focus();
					} else{	
						$("#frmbuscar #txtmarca").val(rp.datos[0].marca);
					}
				}
			});
		}
	});
	$(".btneditar").click(function(e){
		var codprod=$(this).closest(".fila").children(".codprod").text();
		location.href="editar_producto.php?codprod="+codprod;
	});
	$(".btnborrar").click(function(e){
		var codprod=$(this).closest(".fila").children(".codprod").text();
		var prod=$(this).closest(".fila").children(".prod").text();

		$("#aviso").modal("show");
		$("#aviso .codprod").text(codprod);
		$("#aviso .prod").text(prod);

		$("#aviso .btn-primary").attr("href","../controler/borrar.php?codprod="+codprod);
	});
	$("#frmfiltrar #btnfiltrar").click(function(e) {
		var valor=$("#frmfiltrar #txtvalor").val();
		if (valor!=""){
			$.post("../controler/filtrar.php",{valor: valor},function(contenido){
				$("#tabla").html(contenido);
			});
		}
	});
});