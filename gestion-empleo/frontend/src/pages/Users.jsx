import React, { useRef, useState } from "react";
import { useGetData } from "../hooks/useGetData";
import {
  deleteUsers,
  getUsers,
  setUsers,
  updateUsers,
} from "../services/gestion-empleo/users.service";

export default function Users() {
  const { value } = useGetData(getUsers);
  const [idUpdate, setIdUpdate] = useState(0);

  const idRef = useRef(null);
  const nameRef = useRef(null);
  const lastnameRef = useRef(null);
  const nameCountryRef = useRef(null);
  const nameCityRef = useRef(null);
  const nameNeighborhoodRef = useRef(null);
  const nameEpsRef = useRef(null);
  const addressRef = useRef(null);
  const emailRef = useRef(null);
  const nameRoleRef = useRef(null);

  const inputnameRef = useRef(null);
  const inputlastnameRef = useRef(null);

  const create = (event) => {
    event.preventDefault();
    setUsers({
      role_id: 3,
      country_id: 3,
      city_id: 3,
      neighborhood_id: 1,
      eps_id: 3,
      name: inputnameRef.current.value,
      lastname: inputlastnameRef.current.value,
      email: "test@gmail.com",
      address: "calle 55, guabal",
      mobile: "123456789",
      password: "test123",
    });
  };

  const update = (event) => {
    const result = [];
    value.map((v) => result.push(v));

    console.log(result);
    const { id, city_id, country_id, neighborhood_id, eps_id, role_id } =
      result[result.length - 1];

    setIdUpdate(id);
    updateUsers(event.target.dataset.id, {
      role_id: role_id,
      country_id: country_id,
      city_id: city_id,
      neighborhood_id: neighborhood_id,
      eps_id: eps_id,
      name: inputnameRef.current.value,
      lastname: inputlastnameRef.current.value,
      email: "romo@gmail.com",
      address: "calle 55",
      mobile: "123456789",
      password: "romo123",
    });
  };

  const edit = (event) => {
    console.log({
      id: idRef.current.textContent,
      name: nameRef.current.textContent,
      lastname: lastnameRef.current.textContent,
      email: emailRef.current.textContent,
      address: addressRef.current.textContent,
      nameEps: nameEpsRef.current.textContent,
      nameRole: nameRoleRef.current.textContent,
      nameCountry: nameCountryRef.current.textContent,
      nameCity: nameCityRef.current.textContent,
      nameNeighborhood: nameNeighborhoodRef.current.textContent,
    });

    inputnameRef.current.value = nameRef.current.textContent;
    inputlastnameRef.current.value = lastnameRef.current.textContent;
  };

  const remove = (event) => {
    const idToRemove = event.target.dataset.id;
    deleteUsers(idToRemove);
  };
  return (
    <>
      <h1>User Page</h1>
      <hr />
      <form onSubmit={create}>
        <label>
          Name:
          <input
            ref={inputnameRef}
            type="text"
            name="name"
            placeholder="John Doe"
            required
          />
        </label>
        <br />
        <br />
        <label>
          Lastname:
          <input
            ref={inputlastnameRef}
            type="text"
            name="lastname"
            placeholder="John Doe"
            required
          />
        </label>

        <br />
        <br />
        <input type="submit" value="Crear" />
        <input
          type="button"
          value="Actualizar"
          onClick={update}
          data-id={idUpdate}
        />
      </form>
      <br />
      <hr />
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>role</th>
            <th>name</th>
            <th>lastname</th>
            <th>email</th>
            <th>pais</th>
            <th>ciudad</th>
            <th>barrio</th>
            <th>address</th>
            <th>EPS</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {value.map(
            ({
              id,
              name,
              lastname,
              email,
              address,
              nameRole,
              nameCountry,
              nameCity,
              nameNeighborhood,
              nameEps,
            }) => {
              return (
                <React.Fragment key={id}>
                  <tr>
                    <td ref={idRef}>{id}</td>
                    <td ref={nameRoleRef}>{nameRole}</td>
                    <td ref={nameRef}>{name}</td>
                    <td ref={lastnameRef}>{lastname}</td>
                    <td ref={emailRef}>{email}</td>
                    <td ref={nameCountryRef}>{nameCountry}</td>
                    <td ref={nameCityRef}>{nameCity}</td>
                    <td ref={nameNeighborhoodRef}>{nameNeighborhood}</td>
                    <td ref={addressRef}>{address}</td>
                    <td ref={nameEpsRef}>{nameEps}</td>
                    <td>
                      <button data-id={id} onClick={remove}>
                        Eliminar
                      </button>
                      <button data-id={id} onClick={edit}>
                        Editar
                      </button>
                    </td>
                  </tr>
                </React.Fragment>
              );
            }
          )}
        </tbody>
      </table>
    </>
  );
}
