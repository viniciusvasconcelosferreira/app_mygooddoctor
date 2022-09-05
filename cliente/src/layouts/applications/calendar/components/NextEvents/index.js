/**
=========================================================
* Material Dashboard 2 PRO React - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-pro-react
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*/

// @mui material components
import Card from "@mui/material/Card";

// Material Dashboard 2 PRO React components
import MDBox from "components/MDBox";
import MDTypography from "components/MDTypography";

// Material Dashboard 2 PRO React examples
import DefaultItem from "examples/Items/DefaultItem";

import paciente1 from "assets/images/pacientes/1.jpg";
import paciente2 from "assets/images/pacientes/2.jpg";
import paciente3 from "assets/images/pacientes/3.jpg";
import paciente4 from "assets/images/pacientes/4.jpg";
import paciente5 from "assets/images/pacientes/5.jpg";
import paciente6 from "assets/images/pacientes/6.jpg";

const nowData = new Date();

const pacientes = [
  {
    nome: "paciente1",
    imagem: paciente1,
    ultimaConsulta: nowData,
  },
  {
    nome: "paciente2",
    imagem: paciente2,
    ultimaConsulta: nowData,
  },
  {
    nome: "paciente3",
    imagem: paciente3,
    ultimaConsulta: nowData,
  },
  {
    nome: "paciente4",
    imagem: paciente4,
    ultimaConsulta: nowData,
  },
  {
    nome: "paciente5",
    imagem: paciente5,
    ultimaConsulta: nowData,
  },
  {
    nome: "paciente6",
    imagem: paciente6,
    ultimaConsulta: nowData,
  },
];

function NextEvents() {
  const retornaStringData = (data) => {
    const mm = data.getMonth() + 1; // getMonth() is zero-based
    const dd = data.getDate();

    return [(dd > 9 ? "" : "0") + dd, "/", (mm > 9 ? "" : "0") + mm, "/", data.getFullYear()].join(
      ""
    );
  };
  return (
    <Card sx={{ height: "100%" }}>
      <MDBox pt={2} px={2}>
        <MDTypography variant="h6" fontWeight="medium">
          Total de {pacientes.length} pacientes
        </MDTypography>
      </MDBox>
      <MDBox p={2}>
        {pacientes.map((paciente) => (
          <DefaultItem
            title={paciente.nome}
            description={`Ultima consulta: ${retornaStringData(paciente.ultimaConsulta)}`}
            image={paciente.imagem}
          />
        ))}
      </MDBox>
    </Card>
  );
}

export default NextEvents;
