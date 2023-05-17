import { useEffect, useState } from "react";

export const useGetData = (callback) => {
  const [value, setValue] = useState([]);

  useEffect(() => {
    const getData = async () => {
      const data = await callback();
      setValue(data);
    };
    getData();
  }, []);
  return { value };
};
