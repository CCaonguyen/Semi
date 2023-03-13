import { Select, Space } from 'antd';
import { useState } from 'react';
const adult = [1,2,3,4,5,6,7,8,9,10];
const room = {
  1: [1],
  2: [1,2],
  3: [1,2,3],
  4: [1,2,3,4],
  5: [1,2,3,4,5],
  6: [1,2,3,4,5,6],
  7: [1,2,3,4,5,6,7],
  8: [1,2,3,4,5,6,7,8],
  9: [1,2,3,4,5,6,7,8,9],
  10: [1,2,3,4,5,6,7,8,9,10],
};
const App = () => {
  const [roomes, setroomes] = useState(room[adult[0]]);
  const [secondRoom, setsecondRoom] = useState(room[adult[0]][0]);
  const handleAdultChange = (value) => {
    setroomes(room[value]);
    setsecondRoom(room[value][0]);
  };
  const onsecondRoomChange = (value) => {
    setsecondRoom(value);
  };
  return (
    <Space wrap>
      <Select
        defaultValue={adult[0]}
        style={{
          width: 120,
        }}
        onChange={handleAdultChange}
        options={adult.map((adult) => ({
          label: adult,
          value: adult,
        }))}
      />
      <Select
        style={{
          width: 120,
        }}
        value={secondRoom}
        onChange={onsecondRoomChange}
        options={roomes.map((room) => ({
          label: room,
          value: room,
        }))}
      />
    </Space>
  );
};
export default App;