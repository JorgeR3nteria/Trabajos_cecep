import axios from "axios";
import { httpServer } from "../../constants/http-server";

const ENDPOINT = "users";

export const getUsers = async () => {
  const { data } = await axios.get(`${httpServer}/${ENDPOINT}`);
  return data;
};

export const setUsers = async (data) => {
  return await axios
    .post(`${httpServer}/${ENDPOINT}`, { ...data })
    .then((response) => console.log(response));
};

export const updateUsers = async (id, data) => {
  return await axios
    .put(`${httpServer}/${ENDPOINT}/${id}`, { ...data })
    .then((response) => console.log(response));
};

export const deleteUsers = async (id) => {
  return await axios
    .delete(`${httpServer}/${ENDPOINT}/${id}`)
    .then((response) => console.log(response));
};
