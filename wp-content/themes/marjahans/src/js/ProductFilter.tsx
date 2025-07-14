import React, { useState } from "react";

export default function ProductFilter() {
  const [metal, setMetal] = useState("");

  return (
    <div className="my-4" id="product-filter">
      <label className="mr-2">Metal:</label>
      <select
        value={metal}
        onChange={(e) => setMetal(e.target.value)}
        className="border p-1"
      >
        <option value="">Any</option>
        <option value="gold">Gold</option>
        <option value="silver">Silver</option>
      </select>
    </div>
  );
}
