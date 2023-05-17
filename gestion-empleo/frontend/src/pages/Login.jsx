import { useState } from "react";
import { useNavigate } from "react-router-dom";
import { useGetData } from "../hooks/useGetData";
import { getUsers } from "../services/gestion-empleo/users.service";

export default function Login() {
  const [data, setData] = useState({ email: "", password: "" });
  const [show, setShow] = useState(false);
  const { value } = useGetData(getUsers);
  const redirect = useNavigate();

  (() => {
    const user = JSON.parse(localStorage.getItem("user"));

    if (user && user.nameRole) {
      redirect("/home");
    }
  })();

  const onSubmit = (event) => {
    event.preventDefault();
    const isValid = value.filter(
      (filter) =>
        filter.email === data.email && filter.password === data.password
    );

    if (isValid.length < 1) {
      setShow(true);
    } else {
      setShow(false);
      localStorage.setItem("user", JSON.stringify(isValid[0]));
      redirect("/home");
    }
    event.target.reset();
  };

  const onChange = (event) => {
    setData((prevState) => ({
      ...prevState,
      [event.target.name]: event.target.value,
    }));
  };

  return (
    <>
      {true ? redirect(-1) : false}
      <h1>Login</h1>
      <form onSubmit={onSubmit}>
        {show && <p>Usuario no encontrado</p>}
        <label>
          <input
            onChange={onChange}
            type="email"
            name="email"
            placeholder="example@hotmail.com"
            required
          />
        </label>
        <br />
        <br />
        <label>
          <input
            onChange={onChange}
            type="password"
            name="password"
            placeholder="your <password>"
            required
          />
        </label>
        <br />
        <br />
        <input type="submit" value="Iniciar sesión" />
      </form>
    </>
  );
}
