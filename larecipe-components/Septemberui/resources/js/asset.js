import ExampleComponent from "./ExampleComponent";
import Alert from "./Alert";
import LoadingButton from "./LoadingButton";
import Card from "./Card";
import Heading from "./Heading";
import Linkto from "./Linkto";
import DeleteConfirm from "./DeleteConfirm";

LaRecipe.booting(Vue => {
    Vue.component(ExampleComponent.name, ExampleComponent);
    Vue.component(Alert.name, Alert);
    Vue.component(LoadingButton.name, LoadingButton);
    Vue.component(Card.name, Card);
    Vue.component(Heading.name, Heading);
    Vue.component(Linkto.name, Linkto);
    Vue.component(DeleteConfirm.name, DeleteConfirm);
});
