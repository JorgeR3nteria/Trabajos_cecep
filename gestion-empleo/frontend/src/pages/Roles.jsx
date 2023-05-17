import React, { useEffect, useState } from "react";
import { useGetData } from "../hooks/useGetData";
import {
  deleteRoles,
  getRoles,
  setRoles,
  updateRoles,
} from "../services/gestion-empleo/roles.service";

export default function Roles() {
  const { value } = useGetData(getRoles);
  const [selectedOption, setSelectedOption] = useState(1);

  const create = () => {
    setRoles({ nameRole: selectedOption });
  };

  const update = (event) => {
    updateRoles(event.target.dataset.id, { nameRole: selectedOption });
  };

  const remove = (event) => {
    const idToRemove = event.target.dataset.id;
    deleteRoles(idToRemove);
  };
  const handleChange = (event) => {
    setSelectedOption(event.target.value);
  };

  return (
    <>
      <h1>Roles Page</h1>
      <hr />
      <form onSubmit={create}>
        <label>
          NameRole:
          <select value={selectedOption} onChange={handleChange}>
            <option value="1">Jefe Talento Humano</option>
            <option value="2">Jefe Inmediato</option>
            <option value="3">Default</option>
          </select>
        </label>
        <br />
        <br />
        <input type="submit" value="Crear" data-value={selectedOption} />
      </form>
      <br />
      <hr />
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {value.map(({ id, nameRole }) => {
            return (
              <React.Fragment key={id}>
                <tr>
                  <td>{id}</td>
                  <td>{nameRole}</td>
                  <td>
                    <button data-id={id} onClick={remove}>
                      Eliminar
                    </button>
                    <button
                      data-id={id}
                      data-value={selectedOption}
                      onClick={update}
                    >
                      actualizar
                    </button>
                  </td>
                </tr>
              </React.Fragment>
            );
          })}
        </tbody>
      </table>
    </>
  );
}
