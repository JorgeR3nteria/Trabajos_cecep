import axios from "axios";
import { httpServer } from "../../constants/http-server";

const ENDPOINT = "neighborhoods";

export const getNeighborhoods = async () => {
  const { data } = await axios.get(`${httpServer}/${ENDPOINT}`);
  return data;
};

export const setNeighborhoods = async (data) => {
  return await axios
    .post(`${httpServer}/${ENDPOINT}`, { ...data })
    .then((response) => console.log(response));
};

export const updateNeighborhoods = async (id, data) => {
  return await axios
    .put(`${httpServer}/${ENDPOINT}/${id}`, { ...data })
    .then((response) => console.log(response));
};

export const deleteNeighborhoods = async (id) => {
  return await axios
    .delete(`${httpServer}/${ENDPOINT}/${id}`)
    .then((response) => console.log(response));
};
