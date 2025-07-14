import React from "react";
import { createRoot } from "react-dom/client";
import ProductFilter from "./ProductFilter";
import Viewer from "./Viewer";

const filterEl = document.getElementById("product-filter-root");
if (filterEl) {
  createRoot(filterEl).render(<ProductFilter />);
}

const viewerEl = document.getElementById("viewer-root");
if (viewerEl) {
  createRoot(viewerEl).render(
    <Viewer imageUrl="/wp-content/uploads/sample-360.jpg" />,
  );
}
