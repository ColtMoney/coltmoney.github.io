$(function () {

	$(".select-dropdown .expand-down").on("click", function () {
		$(this).closest(".select-dropdown").find(".dropdown-list").toggleClass("active");
	});

	$(".drop-item").on("click", function () {
		const selectedFlag = $(this).find(".flag-icon").html();
		$(this).closest(".select-dropdown").find(".selected-item").html(selectedFlag);
		$(this).parent().removeClass("active");
	});

	$(".change-control-type").on("click", function () {
		const control = $(this).parent().find(".control");
		if (control.attr("type") === "text") {
			control.prop("type", "password")
		} else {
			control.prop("type", "text")
		}
	});

	if ($("#map-1").length) {

		var canvas = this.__canvas = new fabric.Canvas('map-1', {
			selection: false,
			fireRightClick: true
		});
		canvas.setDimensions({
			width: 1236,
			height: 899
		});
		fabric.Object.prototype.originX = fabric.Object.prototype.originY = 'center';

		var imgBase = document.getElementById('map-itm-img');
		var imgMain = document.getElementById('map-itm-img-main');
		var imgBig = document.getElementById('map-itm-img-big');
		var contentBig1 = document.getElementById('map-big-1');
		var btnChange = document.getElementById('canvas-change');
		function makeImageBig(imgElement, content, left, top, line1, line2, line3, line4, line5, line6, line7, line8, line9) {
			let image = new fabric.Image(imgElement, {
				left: left,
				top: top
			});
			image.hasControls = image.hasBorders = false;

			image.line1 = line1;
			image.line2 = line2;
			image.line3 = line3;
			image.line4 = line4;
			image.line5 = line5;
			image.line6 = line6;
			image.line7 = line7;
			image.line8 = line8;
			image.line9 = line9;

			content.style.left = (image.left - 136 / 2) + 'px';
			content.style.top = (image.top - 114 / 2) + 'px';
			return image;
		}

		function makeImage(imgElement, left, top, line1, line2, line3, line4, line5, line6, line7, line8, line9) {
			let image = new fabric.Image(imgElement, {
				left: left,
				top: top
			});
			image.hasControls = image.hasBorders = false;

			image.line1 = line1;
			image.line2 = line2;
			image.line3 = line3;
			image.line4 = line4;
			image.line5 = line5;
			image.line6 = line6;
			image.line7 = line7;
			image.line8 = line8;
			image.line9 = line9;
			return image;
		}

		function makeLine(coords) {
			return new fabric.Line(coords, {
				fill: '#ADC1DB',
				stroke: '#ADC1DB',
				strokeWidth: 1,
				selectable: false,
				evented: false,
			});
		}

		var line1 = makeLine([695, 495, 665, 128]),
			line2 = makeLine([695, 495, 955, 320]),
			line3 = makeLine([695, 495, 282, 288]),
			line4 = makeLine([695, 495, 1140, 660]),
			line5 = makeLine([695, 495, 750, 620]),
			line6 = makeLine([695, 495, 425, 512]);
			line7 = makeLine([695, 495, 420, 790]);
			line8 = makeLine([695, 495, 150, 713]);
			line9 = makeLine([665, 128, 757, 140]);
			line10 = makeLine([665, 128, 648, 250]);
			line11 = makeLine([665, 128, 500, 115]);
			line12 = makeLine([282, 288, 205, 187]);
			line13 = makeLine([282, 288, 408, 322]);
			line14 = makeLine([282, 288, 147, 321]);
			line15 = makeLine([750, 620, 880, 745]);
			line16 = makeLine([750, 620, 750, 682]);
			line17 = makeLine([750, 620, 693, 695]);
			line18 = makeLine([750, 620, 647, 652]);
			line19 = makeLine([420, 790, 508, 786]);
			line20 = makeLine([420, 790, 430, 855]);
			line21 = makeLine([420, 790, 380, 860]);
			line22 = makeLine([420, 790, 327, 814]);
			line23 = makeLine([420, 790, 435, 700]);
			line24 = makeLine([420, 790, 340, 733]);
			line25 = makeLine([425, 512, 380, 433]);
			line26 = makeLine([425, 512, 300, 509]);
			line27 = makeLine([425, 512, 358, 608]);
			line28 = makeLine([425, 512, 482, 603]);
			line29 = makeLine([150, 713, 129, 639]);
			line30 = makeLine([150, 713, 243, 693]);
			line31 = makeLine([150, 713, 109, 804]);
			line32 = makeLine([150, 713, 65, 672]);

		canvas.add(line1, line2, line3, line4, line5, line6, line7, line8, line9, line10, line11, line12, line13, line14, line15, line16, line17, line18, line19, line20, line21, line22, line23, line24, line25, line26, line27, line28, line29, line30, line31, line32);

		canvas.add(
			makeImage(imgMain, line1.get('x1'), line1.get('y1'), null, line1, line2, line3, line4, line5, line6, line7, line8),
			makeImageBig(imgBig, contentBig1, line1.get('x2'), line1.get('y2'), line1, line9, line10, line11),
			makeImage(imgBig, line2.get('x2'), line2.get('y2'), line2),
			makeImage(imgBig, line3.get('x2'), line3.get('y2'), line3, line12, line13, line14),
			makeImage(imgBig, line4.get('x2'), line4.get('y2'), line4),
			makeImage(imgBig, line5.get('x2'), line5.get('y2'), line5, line15, line16, line17, line18),
			makeImage(imgBig, line6.get('x2'), line6.get('y2'), line6, line25, line26, line27, line28),
			makeImage(imgBig, line7.get('x2'), line7.get('y2'), line7, line19, line20, line21, line22, line23, line24),
			makeImage(imgBig, line8.get('x2'), line8.get('y2'), line8, line29, line30, line31, line32),
			makeImage(imgBase, line9.get('x2'), line9.get('y2'), line9),
			makeImage(imgBase, line10.get('x2'), line10.get('y2'), line10),
			makeImage(imgBase, line11.get('x2'), line11.get('y2'), line11),
			makeImage(imgBase, line12.get('x2'), line12.get('y2'), line12),
			makeImage(imgBase, line13.get('x2'), line13.get('y2'), line13),
			makeImage(imgBase, line14.get('x2'), line14.get('y2'), line14),
			makeImage(imgBase, line15.get('x2'), line15.get('y2'), line15),
			makeImage(imgBase, line16.get('x2'), line16.get('y2'), line16),
			makeImage(imgBase, line17.get('x2'), line17.get('y2'), line17),
			makeImage(imgBase, line18.get('x2'), line18.get('y2'), line18),
			makeImage(imgBase, line19.get('x2'), line19.get('y2'), line19),
			makeImage(imgBase, line20.get('x2'), line20.get('y2'), line20),
			makeImage(imgBase, line21.get('x2'), line21.get('y2'), line21),
			makeImage(imgBase, line22.get('x2'), line22.get('y2'), line22),
			makeImage(imgBase, line23.get('x2'), line23.get('y2'), line23),
			makeImage(imgBase, line24.get('x2'), line24.get('y2'), line24),
			makeImage(imgBase, line25.get('x2'), line25.get('y2'), line25),
			makeImage(imgBase, line26.get('x2'), line26.get('y2'), line26),
			makeImage(imgBase, line27.get('x2'), line27.get('y2'), line27),
			makeImage(imgBase, line28.get('x2'), line28.get('y2'), line28),
			makeImage(imgBase, line29.get('x2'), line29.get('y2'), line29),
			makeImage(imgBase, line30.get('x2'), line30.get('y2'), line30),
			makeImage(imgBase, line31.get('x2'), line31.get('y2'), line31),
			makeImage(imgBase, line32.get('x2'), line32.get('y2'), line32),
		);

		document.getElementById('map-box').addEventListener('contextmenu', function (e) {
			e.preventDefault();
		}, false);

		canvas.on('mouse:down', (event) => {
			if (event.button === 3) {
				if (event.target !== null) {
					btnChange.style.left = (event.target.left) + 'px';
					btnChange.style.top = (event.target.top - 38) + 'px';
					btnChange.style.opacity = 1;
					btnChange.style.visibility = "visible";
					return;
				}
			}
			if (event.button === 1) {
				if (event.target === null) { 
					btnChange.style.opacity = 0;
					btnChange.style.visibility = "hidden";
				}
			}
		});

		canvas.on('object:moving', function (e) {
			var p = e.target;
			p.line1 && p.line1.set({
				'x2': p.left,
				'y2': p.top
			});
			p.line2 && p.line2.set({
				'x1': p.left,
				'y1': p.top
			});
			p.line3 && p.line3.set({
				'x1': p.left,
				'y1': p.top
			});
			p.line4 && p.line4.set({
				'x1': p.left,
				'y1': p.top
			});
			p.line5 && p.line5.set({
				'x1': p.left,
				'y1': p.top
			});
			p.line6 && p.line6.set({
				'x1': p.left,
				'y1': p.top
			});
			p.line7 && p.line7.set({
				'x1': p.left,
				'y1': p.top
			});
			p.line8 && p.line8.set({
				'x1': p.left,
				'y1': p.top
			});
			p.line9 && p.line9.set({
				'x1': p.left,
				'y1': p.top
			});
			canvas.renderAll();
		});

	}

});