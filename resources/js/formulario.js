$("#for1").submit(function (e) {
    e.preventDefault();
    h = $("#for1").serialize();
    $.ajax({
        type: "get",
        url: "create",
        data: h,
        // dataType: "dataType",
        success: function (response) {
            console.log(response);
            if (response) {
                // * reset formulario
                $("#for1").trigger("reset");

                // *mensaje de correcto
                $.gritter.add({
                    title: "Registrado",
                    text: "Formulario Concluido",
                    sticky: false,
                    TimeRanges,
                });

                // *funcion de listar
                listData();
            } else {
                $.gritter.add({
                    title: "ERROR !!",
                    text: "",
                    sticky: false,
                });
            }
        },
    });
});

function actualizarData() {
    $.ajax({
        type: "get",
        url: "actData",
        // data: "data",
        // dataType: "dataType",
        success: function (response) {
            console.log(response);
        },
    });
}

function listData() {
    $.ajax({
        type: "get",
        url: "listData",
        // data: "data",
        // dataType: "dataType",
        success: function (response) {
            console.log(response);
            var html = response
                .map(function (param) {
                    return (a = `
                    <tr class="odd gradeX">
                    <td>${param.id}</td>
                    <td>${param.f1}</td>
                    <td>${param.f2}</td>
                    <td>${param.f3}</td>
                    <td>${param.f4}</td>
                    <td>${param.f5}</td>
                    <td>${param.f6}</td>
                    <td>${param.f7}</td>
                    <td>${param.f8}</td>
                    <td>${param.f9}</td>
                    <td>${param.f10}</td>
                  </tr>
                    
                    `);
                })
                .join(" ");
            $("#tablaLista").html(html);
        },
    });
}

// * funcion sacar porcentajes
function dataPorcentaje() {
    $.ajax({
        type: "get",
        url: "dataEst",
        // data: "data",
        // dataType: "dataType",
        success: function (r) {
            console.log(r);
            htmlP1 = `
            <li>
                <div class="row-fluid">
                <div class="span6">
                    <span>M ${Math.round((r.M * 100) / (r.M + r.F))}%, T ${
                r.M
            }</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${
                        (r.M * 100) / r.M + r.F
                    }%;" class="bar"></div>
                    </div>
                </div>
                <div class="span6">
                    <span>M ${Math.round((r.F * 100) / (r.M + r.F))}%, T ${
                r.F
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${
                        (r.F * 100) / r.M + r.F
                    }%;" class="bar"></div>
                    </div>
                </div>
                </div>
            </li>
            `;
            $("#ssss").html(htmlP1);

            //* pregunta 2
            tmp2 = Math.round(
                (r.resMP2a * 100) /
                    (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
            );
            tfp2 = r.resFP2a + r.resFP2b + r.resFP2c + r.resFP2d;
            htmlP2 = `
            <li>
                <div class="row-fluid">
                <div class="span6">
                    <span>M ${Math.round(
                        (r.resMP2a * 100) /
                            (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
                    )}%, T ${r.resMP2a}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (r.resMP2a * 100) /
                            (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (r.resMP2b * 100) /
                            (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
                    )}%, T ${r.resMP2b}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (r.resMP2b * 100) /
                            (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (r.resMP2c * 100) /
                            (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
                    )}%, T ${r.resMP2c}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (r.resMP2c * 100) /
                            (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (r.resMP2d * 100) /
                            (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
                    )}%, T ${r.resMP2d}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (r.resMP2d * 100) /
                            (r.resMP2a + r.resMP2b + r.resMP2c + r.resMP2d)
                    )}%;" class="bar"></div>
                    </div>
                </div>
                <div class="span6">
                    <span>M ${Math.round((r.resFP2a * 100) / tfp2)}%, T ${
                r.resFP2a
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (r.resFP2a * 100) / tfp2
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((r.resFP2b * 100) / tfp2)}%, T ${
                r.resFP2b
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (r.resFP2b * 100) / tfp2
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((r.resFP2c * 100) / tfp2)}%, T ${
                r.resFP2c
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (r.resFP2c * 100) / tfp2
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((r.resFP2d * 100) / tfp2)}%, T ${
                r.resFP2d
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (r.resFP2d * 100) / tfp2
                    )}%;" class="bar"></div>
                    </div>
                </div>
                </div>
            </li>
            `;
            $("#dP2").html(htmlP2);

            // * pregunta 3
            tmp3 = Math.round(
                (r.resMP3a * 100) /
                    (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
            );
            tfp3 = r.resFP3a + r.resFP3b + r.resFP3c + r.resFP3d;
            htmlP3 = `
            <li>
                <div class="row-fluid">
                <div class="span6">
                    <span>M ${Math.round(
                        (r.resMP3a * 100) /
                            (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
                    )}%, T ${r.resMP3a}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (r.resMP3a * 100) /
                            (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (r.resMP3b * 100) /
                            (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
                    )}%, T ${r.resMP3b}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (r.resMP3b * 100) /
                            (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (r.resMP3c * 100) /
                            (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
                    )}%, T ${r.resMP3c}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (r.resMP3c * 100) /
                            (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (r.resMP3d * 100) /
                            (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
                    )}%, T ${r.resMP3d}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (r.resMP3d * 100) /
                            (r.resMP3a + r.resMP3b + r.resMP3c + r.resMP3d)
                    )}%;" class="bar"></div>
                    </div>
                </div>
                <div class="span6">
                    <span>M ${Math.round((r.resFP3a * 100) / tfp3)}%, T ${
                r.resFP3a
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (r.resFP3a * 100) / tfp3
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((r.resFP3b * 100) / tfp3)}%, T ${
                r.resFP3b
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (r.resFP3b * 100) / tfp3
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((r.resFP3c * 100) / tfp3)}%, T ${
                r.resFP3c
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (r.resFP3c * 100) / tfp3
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((r.resFP3d * 100) / tfp3)}%, T ${
                r.resFP3d
            }</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (r.resFP3d * 100) / tfp3
                    )}%;" class="bar"></div>
                    </div>
                </div>
                </div>
            </li>
            `;
            $("#dP3").html(htmlP3);
            $("#dP4").html(funcRhtml(r, 4));
            $("#dP5").html(funcRhtml(r, 5));
            $("#dP6").html(funcRhtml(r, 6));
            $("#dP9").html(funcRhtml(r, 9));
        },
    });

    html = `<li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 60% Clicks <span class="pull-right strong">567</span>
            <div class="progress progress-striped ">
            <div style="width: 60%;" class="bar"></div>
            <div style="width: 30%;" class="bar" style="color:red"></div>
            </div>
        </li>
        <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 72% Uniquie Clicks <span class="pull-right strong">507</span>
            <div class="progress progress-success progress-striped ">
            <div style="width: 72%;" class="bar"></div>
            </div>
        </li>
        <li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span> 53% Impressions <span class="pull-right strong">457</span>
            <div class="progress progress-warning progress-striped ">
            <div style="width: 53%;" class="bar"></div>
            </div>
        </li>
        <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 3% Online Users <span class="pull-right strong">8</span>
            <div class="progress progress-danger progress-striped ">
            <div style="width: 3%;" class="bar"></div>
            </div>
        </li>`;
    $("#ssssww").html(html);
}
function funcRhtml(r, param) {
    switch (param) {
        case 4:
            // * pregunta 4

            am = r.resMP4a;
            bm = r.resMP4b;
            af = r.resFP4a;
            bf = r.resFP4b;
            // tmp4 = Math.round((a * 100) / (a + b));
            tm = am + bm;
            tf = af + bf;
            htmlP4 = `
            <li>
                <div class="row-fluid">
                <div class="span6">
                    <span>M ${Math.round(
                        (am * 100) / (am + bm)
                    )}%, T ${am}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (am * 100) / (am + bm)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (bm * 100) / (am + bm)
                    )}%, T ${bm}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (bm * 100) / (am + bm)
                    )}%;" class="bar"></div>
                    </div>
                </div>
                <div class="span6">
                    <span>M ${Math.round((af * 100) / tf)}%, T ${af}</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (af * 100) / tf
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((bf * 100) / tf)}%, T ${bf}</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (bf * 100) / tf
                    )}%;" class="bar"></div>
                    </div>
                </div>
                </div>
            </li>
            `;
            return htmlP4
            break;
        case 5:
            // * pregunta 4

            am = r.resMP5a;
            bm = r.resMP5b;
            af = r.resFP5a;
            bf = r.resFP5b;
            // tmp4 = Math.round((a * 100) / (a + b));
            tm = am + bm;
            tf = af + bf;
            htmlP5 = `
            <li>
                <div class="row-fluid">
                <div class="span6">
                    <span>M ${Math.round(
                        (am * 100) / (am + bm)
                    )}%, T ${am}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (am * 100) / (am + bm)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (bm * 100) / (am + bm)
                    )}%, T ${bm}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (bm * 100) / (am + bm)
                    )}%;" class="bar"></div>
                    </div>
                </div>
                <div class="span6">
                    <span>M ${Math.round((af * 100) / tf)}%, T ${af}</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (af * 100) / tf
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((bf * 100) / tf)}%, T ${bf}</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (bf * 100) / tf
                    )}%;" class="bar"></div>
                    </div>
                </div>
                </div>
            </li>
            `;
            return htmlP5
            break;
        case 6:
            // * pregunta 4

            am = r.resMP6a;
            bm = r.resMP6b;
            af = r.resFP6a;
            bf = r.resFP6b;
            // tmp4 = Math.round((a * 100) / (a + b));
            tm = am + bm;
            tf = af + bf;
            htmlP6 = `
            <li>
                <div class="row-fluid">
                <div class="span6">
                    <span>M ${Math.round(
                        (am * 100) / (am + bm)
                    )}%, T ${am}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (am * 100) / (am + bm)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (bm * 100) / (am + bm)
                    )}%, T ${bm}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (bm * 100) / (am + bm)
                    )}%;" class="bar"></div>
                    </div>
                </div>
                <div class="span6">
                    <span>M ${Math.round((af * 100) / tf)}%, T ${af}</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (af * 100) / tf
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((bf * 100) / tf)}%, T ${bf}</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (bf * 100) / tf
                    )}%;" class="bar"></div>
                    </div>
                </div>
                </div>
            </li>
            `;
            return htmlP6
            break;
            case 9:
            // * pregunta 4

            am = r.resMP9a;
            bm = r.resMP9b;
            af = r.resFP9a;
            bf = r.resFP9b;
            // tmp4 = Math.round((a * 100) / (a + b));
            tm = am + bm;
            tf = af + bf;
            htmlP9 = `
            <li>
                <div class="row-fluid">
                <div class="span6">
                    <span>M ${Math.round(
                        (am * 100) / (am + bm)
                    )}%, T ${am}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (am * 100) / (am + bm)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (bm * 100) / (am + bm)
                    )}%, T ${bm}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (bm * 100) / (am + bm)
                    )}%;" class="bar"></div>
                    </div>
                </div>
                <div class="span6">
                    <span>M ${Math.round((af * 100) / tf)}%, T ${af}</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (af * 100) / tf
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round((bf * 100) / tf)}%, T ${bf}</span>
                    <div class="progress progress-danger progress-striped ">
                    <div style="width:${Math.round(
                        (bf * 100) / tf
                    )}%;" class="bar"></div>
                    </div>
                </div>
                </div>
            </li>
            `;
            return htmlP9
            break;
            case 7:
            // * pregunta 4

            am = r.resMP7a;
            bm = r.resMP7b;
            bm = r.resMP7b;
            af = r.resFP7a;
            bf = r.resFP7b;
            bf = r.resFP7b;
            // tmp4 = Math.round((a * 100) / (a + b));
            tm = am + bm + cm;
            tf = af + bf + cf;
            htmlP6 = `
            <li>
                <div class="row-fluid">
                <div class="span6">
                    <span>M ${Math.round(
                        (am * 100) / (tm)
                    )}%, T ${am}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (am * 100) / (tm)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (bm * 100) / (tm)
                    )}%, T ${bm}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (bm * 100) / (tm)
                    )}%;" class="bar"></div>
                    </div>
                    <span>M ${Math.round(
                        (cm * 100) / (tm)
                    )}%, T ${cm}</span>
                    <div class="progress progress-striped ">
                    <div style="width: ${Math.round(
                        (cm * 100) / (tm)
                    )}%;" class="bar"></div>
                    </div>
                </div>
                <div class="span6">
                <span>M ${Math.round(
                    (af * 100) / (tf)
                )}%, T ${af}</span>
                <div class="progress progress-striped ">
                <div style="width: ${Math.round(
                    (af * 100) / (tf)
                )}%;" class="bar"></div>
                </div>
                <span>M ${Math.round(
                    (bf * 100) / (tf)
                )}%, T ${bf}</span>
                <div class="progress progress-striped ">
                <div style="width: ${Math.round(
                    (bf * 100) / (tf)
                )}%;" class="bar"></div>
                </div>
                <span>M ${Math.round(
                    (cf * 100) / (tf)
                )}%, T ${cf}</span>
                <div class="progress progress-striped ">
                <div style="width: ${Math.round(
                    (cf * 100) / (tf)
                )}%;" class="bar"></div>
                </div>
                </div>
                </div>
            </li>
            `;
            return htmlP6
            break;

        default:
            break;
    }
}
