<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<STYLE>
        <!-- 
        BODY,DIV,TABLE,THEAD,TBODY,TFOOT,TR,TH,TD,P { font-family:"Arial"; font-size:x-small }
         -->
</STYLE>

<table CELLSPACING="0" cellpadding="0">
    <tr>
        <th>Partida Presupuestal</th>
        <th>Autorizado</th>
        <th>Financiero</th>
        <th>Especie</th>
        <th>Jurisdiccion</th>
    </TR>
    <tr>
        <th>
            <SELECT style="width: 200px;">
                <OPTION>Seleccionar...</OPTION> 
                <OPTION>Subsidios al Estado y Municipios.</OPTION>
                <OPTION>Otros Subsidios. </OPTION>
                <OPTION>Subsidios a  Organismos y Empresas Públicas.</OPTION>
                <OPTION>Subsidios para Servicios Personales. </OPTION>
                <OPTION>Subsidios para Gastos de Operación. </OPTION>
                <OPTION>Subsidios para Adquisición de Bienes Muebles, Inmuebles e Intangibles. </OPTION>
                <OPTION>Subsidios por Otras Medidas Económicas. </OPTION>
                <OPTION>Subsidio al Impuesto Sobre Sueldos y Salarios. </OPTION>
                <OPTION>Ayudas a Organizaciones y Personas (Ayudas Culturales y Sociales). </OPTION>
                <OPTION>Traslado de Personas. </OPTION>
                <OPTION>Premios. </OPTION>
                <OPTION>Apoyo a Voluntarios que Participan en Diversos Programas.  </OPTION>
                <OPTION>Becas. </OPTION>
                <OPTION>Ayudas para Expropiación de Predios. </OPTION>
                <OPTION>Seguro Escolar (Exclusivo Educación Básica). </OPTION>
                <OPTION>Pensiones de Gracia. </OPTION>
                <OPTION>Becas para Aspirantes en Cursos de Formación Inicial (Exclusivo Seguridad Pública) </OPTION>
              <OPTION>  Ayudas a la Educación. </OPTION>
             <OPTION>   Ayuda para Arrendamiento de Inmuebles de las Supervisorías  Escolares (Exclusivo Educación Básica). </OPTION>
             <OPTION>   Ayudas a Voluntarios que Participan en Programas Especiales de Educación. </OPTION>
             <OPTION>   Ayudas a Instituciones Sin Fines de Lucro. </OPTION>
             <OPTION>   Financiamiento Público a Partidos Políticos y Agrupaciones Políticas con Registro Autorizado. </OPTION>
             <OPTION>   Otras Ayudas. </OPTION>
             <OPTION>   Ayudas a Instituciones Educativas Afectadas por Fenómenos Naturales. </OPTION>
             <OPTION>   Pensiones. </OPTION>
              <OPTION>  Jubilaciones. </OPTION>
              <OPTION>  Aportaciones a Fideicomisos Públicos. </OPTION>
              <OPTION>  Aportaciones a Mandatos Públicos. </OPTION>
              <OPTION>  Aportaciones Internacionales </OPTION>
              <OPTION>  Mobiliario.  </OPTION>
              <OPTION>  Bienes Artísticos y Culturales.  </OPTION>
              <OPTION>  Bienes Informáticos.  </OPTION>
              <OPTION>  Equipo de Administración. </OPTION>
              <OPTION>  Adjudicaciones, Expropiaciones e Indemnizaciones de Bienes Muebles.</OPTION>
                <OPTION>Equipos y Aparatos Audiovisuales. </OPTION>
                <OPTION>Aparatos Deportivos.</OPTION>
                <OPTION>Cámaras Fotográficas y de Video. </OPTION>
                <OPTION>Otro Mobiliario y Equipo Educacional y Recreativo. </OPTION>
               <OPTION> Equipo Médico y de Laboratorio. </OPTION>
                <OPTION>Instrumental Médico y de Laboratorio. </OPTION>
                <OPTION>Vehículos y Equipo Terrestre. </OPTION>
                <OPTION>Carrocerías y Remolques. </OPTION>
                <OPTION>Vehículos y Equipo de Transporte Aéreo.</OPTION>
                <OPTION>Vehículos y Equipo Marítimo, Lacustre y Fluvial.</OPTION>
                <OPTION>Otros Equipos de Transporte. </OPTION>
                <OPTION>Vehículos y Equipo Auxiliar de Transporte. </OPTION>
                <OPTION>Maquinaria y Equipo de Defensa y Seguridad Pública. </OPTION>
                <OPTION>Equipo de Seguridad Pública. </OPTION>
                <OPTION>Maquinaria y Equipo Agropecuario</OPTION>
                <OPTION>Maquinaria y Equipo Industrial</OPTION>
                <OPTION>Maquinaria y Equipo de Construcción</OPTION>
                <OPTION>Sistemas de Aire Acondicionado,  Calefacción y de Refrigeración Industrial y Comercial</OPTION>
                <OPTION>Equipos y Aparatos de Comunicaciones y Telecomunicaciones</OPTION>
                <OPTION>Maquinaria y Equipo Eléctrico y Electrónico</OPTION>
                <OPTION>Maquinaria y Equipo Diverso</OPTION>
                <OPTION>Herramientas y Máquinas-Herramienta</OPTION>
                <OPTION>Refacciones y Accesorios Mayores</OPTION>
                <OPTION>Bienes Muebles por Arrendamiento Financiero</OPTION>
                <OPTION>Otros Equipos y Bienes Muebles</OPTION>
                <OPTION>Animales de Reproducción</OPTION>
                <OPTION>Animales de Trabajo</OPTION>
                <OPTION>Animales de Reproducción</OPTION>
                <OPTION>Animales de Reproducción</OPTION>
                <OPTION>Animales de Reproducción</OPTION>
                <OPTION>Animales de Trabajo</OPTION>
                <OPTION>Animales de Reproducción</OPTION>
                <OPTION>Animales de Trabajo</OPTION>
                <OPTION>Animales de Reproducción</OPTION>
                <OPTION>Animales de Custodia y Vigilancia</OPTION>
                <OPTION>Especies Menores y de Zoológico</OPTION>
                <OPTION>Árboles y Plantas</OPTION>
                <OPTION>Otros Activos Biológicos.</OPTION>
                <OPTION>Terrenos</OPTION>
                <OPTION>Viviendas</OPTION>
                <OPTION>Edificios y Locales</OPTION>
                <OPTION>Adjudicaciones, Expropiaciones e Indemnizaciones de Inmuebles</OPTION>
                <OPTION>Bienes Inmuebles por Arrendamiento Financiero</OPTION>
                <OPTION>Otros Bienes Inmuebles.</OPTION>
                <OPTION>Software. </OPTION>
                <OPTION>Patentes</OPTION>
                <OPTION>Marcas</OPTION>
                <OPTION>Licencias Informáticas e Intelectuales. </OPTION>
                <OPTION>Otros Activos Intangibles</OPTION>
                <OPTION>Construcción de Obras para el Abastecimiento de Agua, Gas, Electricidad y Telecomunicaciones. </OPTION>
                <OPTION>Mantenimiento y Rehabilitación de Obras para el Abastecimiento de Agua, Gas, Electricidad y Telecomunicaciones.</OPTION>
                <OPTION>Indirectos para Obras por Contrato de Obras para el Abastecimiento de Agua, Gas, Electricidad y Telecomunicaciones</OPTION>
                <OPTION>Obras Normales del Gobierno  para el Abastecimiento de Agua, Gas, Electricidad y Telecomunicaciones. </OPTION>
                <OPTION>Servicios Relacionados con Obra Pública para el Abastecimiento de Agua, Gas, Electricidad y Telecomunicaciones.  </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE), para el Abastecimiento de Agua, Gas, Electricidad y Telecomunicaciones. </OPTION>
                <OPTION>División de Terrenos y Construcción de Obras de Urbanización. </OPTION>
                <OPTION>Mantenimiento y Rehabilitación de Obras de Urbanización.</OPTION>
                <OPTION>Indirectos para Obras por Contrato de División de Terrenos y Construcción de Obras de Urbanización. </OPTION>
                <OPTION>Obras Normales del Gobierno de División de Terrenos y Construcción de Obras de Urbanización. </OPTION>
                <OPTION>Servicios Relacionados con Obra Pública de División de Terrenos y Construcción de Obras de Urbanización. </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE), de División de Terrenos y Construcción de Obras de Urbanización. </OPTION>
                <OPTION>Obras de Pre-Edificación en Terrenos de Construcción</OPTION>
                <OPTION>Construcción de Vías de Comunicación. </OPTION>
                <OPTION>Mantenimiento y Rehabilitación de Obras de Vías de Comunicación. </OPTION>
                <OPTION>Indirectos para Obras por Contrato  de Vías  de Comunicación. </OPTION>
                <OPTION>Obras Normales del Gobierno de Vías de Comunicación. </OPTION>
                <OPTION>Servicios Relacionados con Obra Pública de Vías de Comunicación. </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE), de Vías de Comunicación</OPTION>
                <OPTION>Otras Construcciones de Ingeniería Civil u Obra Pesada. </OPTION>
                <OPTION>Mantenimiento y Rehabilitación de Otras Construcciones de Ingeniería Civil u Obra Pesada.   </OPTION>
                <OPTION>Indirectos para Obras por Contrato de Otras Construcciones de Ingeniería Civil u Obra Pesada. </OPTION>
                <OPTION>Obras Normales del Gobierno de Otras Construcciones de Ingeniería Civil u Obra Pesada.   </OPTION>
                <OPTION>Servicios Relacionados con Obra Pública de  Otras Construcciones de Ingeniería Civil u Obra Pesada. </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE), de Otras Construcciones de Ingeniería Civil u Obra Pesada. </OPTION>
                <OPTION>Servicios para la  Liberación de Derechos de Vía. </OPTION>
                <OPTION>Instalaciones y Equipamiento en Construcciones. </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE), para Instalaciones y Equipamiento en Construcciones. </OPTION>
                <OPTION>Obras de Construcción para Edificios Habitacionales. </OPTION>
                <OPTION>Mantenimiento y Rehabilitación de Construcción para Edificios Habitacionales. </OPTION>
                <OPTION>Indirectos para Obras por Contrato  para Edificios Habitacionales. </OPTION>
                <OPTION>Obras Normales del Gobierno para Edificios Habitacionales. </OPTION>
                <OPTION>Servicios Relacionados con Obra Pública para Edificios Habitacionales. </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE), para Edificios Habitacionales. </OPTION>
                <OPTION>Obras de Construcción para Edificios no Habitacionales. </OPTION>
                <OPTION>Mantenimiento y Rehabilitación de Construcción para Edificios no Habitacionales. </OPTION>
                <OPTION>Indirectos para Obras por Contrato  para Edificios no Habitacionales. </OPTION>
                <OPTION>Obras Normales del Gobierno para Edificios no Habitacionales. </OPTION>
                <OPTION>Servicios Relacionados con Obra Pública para Edificios no Habitacionales. </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE), para Edificios no Habitacionales. </OPTION>
                <OPTION>Obras de Pre-Edificación en Terrenos de Construcción</OPTION>
                <OPTION>Servicios de Liberación de Derechos de Vía. </OPTION>
                <OPTION>Instalaciones Mayores y Obras de Construcción Especializada. </OPTION>
                <OPTION>Mantenimiento y Rehabilitación de Construcciones</OPTION>
                <OPTION>Indirectos para Obras por Contrato de Instalaciones y Equipamiento en Construcciones. </OPTION>
                <OPTION>Obras Normales del Gobierno de Instalaciones y Equipamiento en Construcciones. </OPTION>
                <OPTION>Servicios Relacionados con Obra Pública de Instalaciones y Equipamiento en Construcciones. </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE), de Instalaciones y Equipamiento en Construcciones</OPTION>
                <OPTION>Ensamble y Edificación de Construcciones Prefabricadas. </OPTION>
                <OPTION>Obras de Terminación y Acabado de Edificios. </OPTION>
                <OPTION>Indirectos para Obras por Contrato de  Ensamble y Edificación de Construcciones Prefabricadas y Obras de Terminación y Acabado de Edificios. </OPTION>
                <OPTION>Servicios Relacionados con Obra Pública de Ensamble y Edificación de Construcciones Prefabricadas y Obras de Terminación y Acabado de Edificios. </OPTION>
                <OPTION>Estudios de Pre-inversión, Programa Normal de Gobierno del Estado (PNGE),  de Ensamble y Edificación de Construcciones Prefabricadas y Obras de Terminación y Acabado de Edificios.</OPTION>
                <OPTION>Productivos</OPTION>
                <OPTION>Créditos Directos para Actividades Productivas. </OPTION>
                <OPTION>Créditos y Financiamientos Directos a la Población. </OPTION>
                <OPTION>Bonos Directos para el Financiamiento de Viviendas.</OPTION>
                <OPTION>Adquisición de Bonos. </OPTION>
                <OPTION>Adquisición de Obligaciones.</OPTION>
                <OPTION>Fideicomisos para Adquisición de Títulos de Crédito. </OPTION>
                <OPTION>Adquisición de Acciones</OPTION>
                <OPTION>Adquisición de Otros Valores. </OPTION>
                <OPTION>Créditos Directos para Actividades Productivas Otorgados al Estado y Municipios con Fines de Política Económica. </OPTION>
                <OPTION>Fideicomisos para Financiamiento de Obras. </OPTION>
                <OPTION>Fideicomisos para el Fomento y Financiamiento  Agropecuario. </OPTION>
                <OPTION>Fideicomisos para el Fomento y Financiamiento  Industrial. </OPTION>
                <OPTION>Fideicomisos para el Fomento y Financiamiento al Comercio y Otros Servicios. </OPTION>
                <OPTION>Aportaciones a Fideicomisos Públicos.</OPTION>
                <OPTION>Fideicomisos para el Fomento y Financiamiento  de la Educación. </OPTION>
                <OPTION>Fideicomisos Agrarios. </OPTION>
                <OPTION>Fondos Comprometidos de Inversión Pública. </OPTION>
                <OPTION>Fondos al Sector Productivo. </OPTION>
                <OPTION>Fideicomiso para la Instrumentación Financiera. </OPTION>
                <OPTION>Inversiones en Fideicomisos Públicos Empresariales y no Financieros Considerados Entidades Paraestatales. </OPTION>
                <OPTION>Erogaciones Contingentes por Fenómenos Naturales. </OPTION>
                <OPTION>Contingencias Socioeconómicas.  </OPTION>
                <OPTION>Erogaciones Complementarias. </OPTION>
                <OPTION>Fondos Comprometidos de Gasto Corriente. </OPTION>
                <OPTION>Fondos al Sector Social. </OPTION>
                <OPTION>Fondo de Ahorro (Poder Legislativo). </OPTION>
                <OPTION>Provisiones para Erogaciones Especiales. </OPTION>
                <OPTION>Fondo General de Participaciones. </OPTION>
                <OPTION>Fondo de Participación de Impuestos Especiales.</OPTION>
                <OPTION>Fondo de Fomento Municipal. </OPTION>
                <OPTION>Otras Participaciones. </OPTION>
                <OPTION>Fondo de Fiscalización. </OPTION>
                <OPTION>Fondo de Compensación. </OPTION>
                <OPTION>Fondo de Extracción de Hidrocarburos. </OPTION>
                <OPTION>Incentivo Derivado de la Coordinación Fiscal</OPTION>
                <OPTION>Impuesto sobre Tenencia o Uso de Vehículos </OPTION>
                <OPTION>Impuesto Sobre Automóviles Nuevos.</OPTION>
                <OPTION>Fondo de Compensación del Impuesto Sobre Automóviles Nuevos (ISAN). </OPTION>
                <OPTION>Impuesto a la Venta Final de Gasolinas y Diesel.</OPTION>
                <OPTION>Impuestos Administrados. </OPTION>
                <OPTION>Otros Conceptos Participables de la Federación a Municipios.           </OPTION>
                <OPTION>Convenios de Colaboración Administrativa.</OPTION>
                <OPTION>Fondo de Aportaciones para la Educación Básica y Normal (FAEB). </OPTION>
                <OPTION>Fondo de Aportaciones para los Servicios de Salud (FASSA). </OPTION>
                <OPTION>Fondo de Aportaciones para la Infraestructura Social Estatal (FAISE). </OPTION>
                <OPTION>Fondo de Aportaciones Múltiples (FAM). </OPTION>
                <OPTION>Fondo de Aportaciones para la Educación Tecnológica y de Adultos (FAETA). </OPTION>
                <OPTION>Fondo de Aportaciones para la Seguridad Pública (FASP). </OPTION>
                <OPTION>Fondo de Aportaciones para el Fortalecimiento de las Entidades Federativas  (FAFEF). </OPTION>
                <OPTION>Otras Aportaciones de la Federación al Estado. </OPTION>
                <OPTION>Fondo de Aportaciones para la Infraestructura Social Municipal (FAISM). </OPTION>
                <OPTION>Fondo de Aportaciones para el Fortalecimiento de los Municipios (FORTAMUN). </OPTION>
                <OPTION>Otras Aportaciones de la Federación a Municipios. </OPTION>
                <OPTION>Aportaciones Previstas en Leyes y Decretos al Sistema de Protección Social. </OPTION>
                <OPTION>Asignaciones Compensatorias al Estado y Municipios. </OPTION>
                <OPTION>Convenios de Reasignación. </OPTION>
                <OPTION>Convenios de Descentralización. </OPTION>
                <OPTION>Otros Convenios.</OPTION>
                <OPTION>Amortización de la Deuda Interna con Instituciones de Crédito. </OPTION>
                <OPTION>Amortización de la Deuda por Emisión de Valores Gubernamentales. </OPTION>
                <OPTION>Amortización de Arrendamientos Financieros Nacionales. </OPTION>
                <OPTION>Amortización de Arrendamientos Financieros Especiales. </OPTION>
                <OPTION>Intereses de la Deuda Interna con Instituciones de Crédito</OPTION>
                <OPTION>Intereses Derivados de la Colocación de Valores Gubernamentales. </OPTION>
                <OPTION>Intereses por Arrendamientos Financieros Nacionales. </OPTION>
                <OPTION>Intereses por Arrendamientos Financieros Especiales. </OPTION>
                <OPTION>Comisiones de la Deuda Interna. </OPTION>
                <OPTION>Gastos de la Deuda Interna.  </OPTION>
                <OPTION>Costo por Coberturas.</OPTION>
                <OPTION>Apoyos a Ahorradores y Deudores de la Banca. </OPTION>
                <OPTION>Adeudos de Ejercicios Fiscales Anteriores por Conceptos Distintos de Servicios Personales. </OPTION>
                <OPTION>Adeudos de Ejercicios Fiscales Anteriores por Servicios Personales.</OPTION>
            </SELECT>
        </th>
        <th><input type="text" size="10px"></th>
        <th><input type="text" size="10px"></th>
        <th><input type="text" size="10px"></th>
        <th>
            <SELECT>
                <OPTION>Seleccionar...</OPTION>
                <OPTION>OFICINA CENTRAL</OPTION>
                <OPTION>I TUXTLA GUTIERREZ</OPTION>
                <OPTION>II SAN CRISTOBAL TOTAL</OPTION>
                <OPTION>III COMITAN TOTAL</OPTION>
                <OPTION>IV VILLAFLORES</OPTION>
                <OPTION>V PICHUCALCO TOTAL</OPTION>
                <OPTION>VI PALENQUE TOTAL</OPTION>
                <OPTION>VII TAPACHULA TOTAL</OPTION>
                <OPTION>VIII TONALA TOTAL</OPTION>
                <OPTION>IX OCOSINGO</OPTION>
                <OPTION>X MOTOZINTLA</OPTION>
            </SELECT>
        </th>
    </tr>
</TABLE>
<TABLE>
    <tr>
        <th>Enero</th>
        <th>Febrero</th>
        <th>Marzo</th>
        <th>Abril</th>
        <th>Mayo</th>
        <th>Junio</th>
        <th>Julio</th>
        <th>Agosto</th>
        <th>Septiembre</th>
        <th>Octubre</th>
        <th>Noviembre</th>
        <th>Diciembre</th>
    </tr>
    <tr>
        <td><input type="text" size="6px"></td>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
        <th><input type="text" size="6px"></th>
    </tr>
    <tr>
        <td colspan="12"><INPUT type="button" value="Agregar Partida"></TD>
    </tr>
</table>

<TABLE CELLSPACING="0" COLS="21" BORDER="0" STYLE="width: 100%">
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<COLGROUP></COLGROUP>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="34" ALIGN="LEFT" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="LEFT" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="LEFT" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="LEFT" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="LEFT" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>AUTORIZADO                        </B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>FINANCIERO</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>ESPECIE</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>TOTAL CALENDARIO</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>ENE</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>FEB</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>MAR</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>ABR</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B> MAY</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B> JUN</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B> JUL</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>AGO</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>SEP</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>OCT</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>NOV</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ROWSPAN=2 ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF"><B>DIC</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a" HEIGHT="85" ALIGN="CENTER" VALIGN=TOP><B>TG</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=TOP><B>FF SFF DG</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=TOP><B>CP</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=TOP><B>MD</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B>PARTIDA</B></TD>
		</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="25901" SDNUM="2058;"><B><FONT SIZE=1>25901</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="61584.09" SDNUM="2058;0;#,##0.00">61,584.09</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="61584.09" SDNUM="2058;0;#,##0.00">61,584.09</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="61584.09" SDNUM="2058;0;#,##0.00">61,584.09</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="16190.69" SDNUM="2058;0;#,##0.00">16,190.69</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="45393.4" SDNUM="2058;0;#,##0.00">45,393.40</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="27000" SDNUM="2058;0;#,##0.00">27,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="27000" SDNUM="2058;0;#,##0.00">27,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="27000" SDNUM="2058;0;#,##0.00">27,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="24000" SDNUM="2058;0;#,##0.00">24,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="67680" SDNUM="2058;0;#,##0.00">67,680.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="67680" SDNUM="2058;0;#,##0.00">67,680.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="67680" SDNUM="2058;0;#,##0.00">67,680.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="60160" SDNUM="2058;0;#,##0.00">60,160.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="47772" SDNUM="2058;0;#,##0.00">47,772.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="47772" SDNUM="2058;0;#,##0.00">47,772.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="47772" SDNUM="2058;0;#,##0.00">47,772.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="42464" SDNUM="2058;0;#,##0.00">42,464.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="32" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="204036.09" SDNUM="2058;0;#,##0.00"><B>204,036.09</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="204036.09" SDNUM="2058;0;#,##0.00"><B>204,036.09</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="204036.09" SDNUM="2058;0;#,##0.00"><B>204,036.09</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="32018.69" SDNUM="2058;0;#,##0.00"><B>32,018.69</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="172017.4" SDNUM="2058;0;#,##0.00"><B>172,017.40</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="25901" SDNUM="2058;"><B><FONT SIZE=1>25901</FONT></B></TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="16190.69" SDNUM="2058;0;#,##0.00">16,190.69</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="16190.69" SDNUM="2058;0;#,##0.00">16,190.69</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="16190.69" SDNUM="2058;0;#,##0.00">16,190.69</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="16190.69" SDNUM="2058;0;#,##0.00">16,190.69</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="41" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="32018.69" SDNUM="2058;0;#,##0.00"><B>32,018.69</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="32018.69" SDNUM="2058;0;#,##0.00"><B>32,018.69</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="32018.69" SDNUM="2058;0;#,##0.00"><B>32,018.69</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="32018.69" SDNUM="2058;0;#,##0.00"><B>32,018.69</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="36" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="25901" SDNUM="2058;"><B><FONT SIZE=1>25901</FONT></B></TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="27" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="27" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="25901" SDNUM="2058;"><B><FONT SIZE=1>25901</FONT></B></TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="27" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="25901" SDNUM="2058;"><B><FONT SIZE=1>25901</FONT></B></TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="27" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="25901" SDNUM="2058;"><B><FONT SIZE=1>25901</FONT></B></TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="27" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="25901" SDNUM="2058;"><B><FONT SIZE=1>25901</FONT></B></TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="9078.68" SDNUM="2058;0;#,##0.00">9,078.68</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="27" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="24906.68" SDNUM="2058;0;#,##0.00"><B>24,906.68</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25301" SDNUM="2058;"><B><FONT SIZE=1>25301</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="3000" SDNUM="2058;0;#,##0.00">3,000.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25401" SDNUM="2058;"><B><FONT SIZE=1>25401</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="7520" SDNUM="2058;0;#,##0.00">7,520.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" HEIGHT="29" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="8" SDNUM="2058;0;0"><B>8</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDNUM="2058;0;0"><B>822B S A</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="2014" SDNUM="2058;0;0"><B>2014</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="1" SDNUM="2058;0;0"><B>1</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE SDVAL="25501" SDNUM="2058;"><B><FONT SIZE=1>25501</FONT></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE BGCOLOR="#FFFFFF" SDVAL="5308" SDNUM="2058;0;#,##0.00">5,308.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" SDVAL="0" SDNUM="2058;0;#,##0.00">0.00</TD>
	</TR>
	<TR>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" HEIGHT="27" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="CENTER" VALIGN=MIDDLE><B><BR></B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="15828" SDNUM="2058;0;#,##0.00"><B>15,828.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
		<TD STYLE="border-top: 1px solid #1a1a1a; border-bottom: 1px solid #1a1a1a; border-left: 1px solid #1a1a1a; border-right: 1px solid #1a1a1a" ALIGN="RIGHT" VALIGN=MIDDLE SDVAL="0" SDNUM="2058;0;#,##0.00"><B>0.00</B></TD>
	</TR>
</TABLE>